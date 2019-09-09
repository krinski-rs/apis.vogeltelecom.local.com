<?php
/**
 * Classe de integração.
 *
 * Classe responsável instanciar o serviço que irá criar ou atualizar pedidos no salesforce.
 */

namespace App\Services\IntegracaoSalesforce\Pedido;

use Monolog\Logger;
use Doctrine\Bundle\DoctrineBundle\Registry;
use App\Services\IntegracaoSalesforce\OAuthSalesforce;
use App\Services\IntegracaoSalesforce\Cliente\Account;
use App\Entity\Cobranca\InvoiceSalesforce;
use App\Entity\Cobranca\Invoice;
use App\Entity\Cobranca\Banco;
use App\Entity\Cobranca\Cobrador;
use App\Entity\Gcdb\Customers;
use App\Entity\Gcdb\Customers2users;
use App\Entity\Gcdb\CadUsers;

/**
 * Class IntegrarPedido
 *
 * @package     \App\Services\IntegracaoSalesforce
 * @subpackage  Pedido
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class IntegrarPedido
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    /**
     * Repository para a busca de Customers no database GCDB.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityRepository
     */
    private $objCustomersRepository = NULL;
        
    /**
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de autenticação.
     *
     * @access  private
     * @var     OAuthSalesforce
     */
    private $objOAuthSalesforce  = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de Account.
     *
     * @access  private
     * @var     Account
     */
    private $objAccount  = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de PedidoFaturamento do salesforce.
     *
     * @access  private
     * @var     PedidoFaturamento
     */
    private $objPedidoFaturamento  = NULL;
    
    /**
     * Variável que irá guardar os parametros de configuração.
     *
     * @access  private
     * @var     array
     */
    private $params  = NULL;
    
    const STATUS_CANCELADO_PROTHEUS = 2008;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   Registry $objRegistry
     * @param   \Monolog\Logger $objLogger
     * @param   OAuthSalesforce $objOAuthSalesforce
     * @param   array   $params
     */
    public function __construct(Registry $objRegistry, Logger $objLogger, OAuthSalesforce $objOAuthSalesforce, array $params)
    {
        $this->objEntityManager         = $objRegistry->getManager('cobranca');
        $this->objEntityManagerProtheus = $objRegistry->getManager('sqlserver_protheus');
        $this->objCustomersRepository   = $objRegistry->getManager('mysql')->getRepository('AppEntity:Gcdb\Customers');
        $this->objLogger                = $objLogger;
        $this->objOAuthSalesforce       = $objOAuthSalesforce;
        $this->params                   =  $params;
        
        $this->objOAuthSalesforce->login();
        
        $token = "{$this->objOAuthSalesforce->getTokenType()} {$this->objOAuthSalesforce->getAccessToken()}";
        $id = explode('/', $this->objOAuthSalesforce->getContents()->id);        
        $this->objAccount = new Account($this->objLogger, $this->params, $token, end($id));
        $this->objPedidoFaturamento = new PedidoFaturamento($this->objLogger, $this->params, $token);
    }
    
    /**
     * Função que trata o tipo de ação que deve ser tomada novo/update
     * 
     * @param InvoiceSalesforce $objInvoiceSalesforce
     * @return object
     */
    public function integrar(InvoiceSalesforce $objInvoiceSalesforce)
    {
        try {
            $this->validate($objInvoiceSalesforce->getInvoice());
            if($objInvoiceSalesforce->getIdSalesforce()){
                $this->objLogger->info("Update do pedido {$objInvoiceSalesforce->getInvoice()->getIdInvoice()}", ['id salesforce' => $objInvoiceSalesforce->getIdSalesforce()]);
                return $this->update($objInvoiceSalesforce);
            }else{
                $this->objLogger->info("Pedido novo {$objInvoiceSalesforce->getInvoice()->getIdInvoice()}");
                return $this->novo($objInvoiceSalesforce);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    /**
     * Função que cria um pedido no salesforce
     * 
     * @param InvoiceSalesforce $objInvoiceSalesforce
     * @throws \Exception
     * @return object
     */
    protected function novo(InvoiceSalesforce $objInvoiceSalesforce)
    {
        try {
            $objInvoice = $objInvoiceSalesforce->getInvoice();
            $objBanco = $objInvoice->getBanco();
            if(!($objBanco instanceof Banco)){
                throw new \Exception('Banco não localizado.');
            }
            $objCobrador = $objBanco->getCobrador();
            if(!($objCobrador instanceof Cobrador)){
                throw new \Exception('Cobrador não localizado.');
            }
            
            $objCustomers = $this->objCustomersRepository->find($objInvoice->getCustumer());
            if(!($objCustomers instanceof Customers)){
                throw new \Exception('Customers não localizado.');
            }
            
            $objCustomers2users = $objCustomers->getCustomers2users()->first();
            if(!($objCustomers2users instanceof Customers2users)){
                throw new \Exception('Customers2users não localizado.');
            }
            
            $objCadUsers = $objCustomers2users->getCadUser();
            if(!($objCadUsers instanceof CadUsers) || ($objCadUsers->getTipo() !== 'J')){
                throw new \Exception('CadUsers não localizado.');
            }
            
            $objAccountSalesforce = $this->objAccount->getByCnpj(str_pad($objCadUsers->getCnpj(), 14, '0', STR_PAD_LEFT));

            if(!$objAccountSalesforce || !is_object($objAccountSalesforce) || !property_exists($objAccountSalesforce, 'Id')){
                $this->objLogger->info("Pedido {$objInvoice->getIdInvoice()} criando Account", ['cliente'=>$objCustomers->getCustomerid()]);
                $retorno = $this->objAccount->createFromCustomer($objCustomers);
                $objAccountSalesforce = $this->objAccount->getById($retorno->id);
                $this->objLogger->info("Pedido {$objInvoice->getIdInvoice()} Account criada com sucesso", ['account'=>$objAccountSalesforce]);
            }

            $arrayPedido = [
                'CNPJ_Vogel__c'=> str_pad($objCobrador->getCnpj(), 14, '0', STR_PAD_LEFT),
                'AccountId__c'=> $objAccountSalesforce->Id,
                'Name'=> "Pedido {$objInvoice->getIdInvoice()}",
                'Numero_da_Nota__c' => $objInvoice->getNumeroNota(),
                'Numero_Pedido__c' => $objInvoice->getIdInvoice(),
                'Status__c' => ($objInvoice->getStatusPagamentoSalesforce() ? 'Pago' : 'Faturado'),
                'Valor__c' => $objInvoice->getValue(),
                'Vencimento__c' => $objInvoice->getDateValit()->format('Y-m-d'),
                'Emissao__c' => $objInvoice->getDateRecord()->format('Y-m-d')
            ];
            $objPedidoFaturamento = $this->objPedidoFaturamento->create($arrayPedido);
            
            $objInvoiceSalesforce->setDataIntegracao(new \DateTime());
            $objInvoiceSalesforce->setIdSalesforce($objPedidoFaturamento->id);
            $objInvoice->setIdSalesforce($objPedidoFaturamento->id);
            $this->objEntityManager->merge($objInvoice);
            $this->objEntityManager->merge($objInvoiceSalesforce);
            $this->objEntityManager->flush();
            return $objPedidoFaturamento;
        } catch (\Exception $e){
            if(isset($objPedidoFaturamento) && is_object($objPedidoFaturamento) &&property_exists($objPedidoFaturamento, 'id')){
                $objInvoiceSalesforce->setDataIntegracao(new \DateTime());
                $objInvoiceSalesforce->setIdSalesforce($objPedidoFaturamento->id);
                $objInvoice->setIdSalesforce($objPedidoFaturamento->id);
                $this->objEntityManager->merge($objInvoice);
                $this->objEntityManager->merge($objInvoiceSalesforce);
                $this->objEntityManager->flush();
            }else{
                $objInvoiceSalesforce->setDataIntegracao(new \DateTime());
                $this->objEntityManager->merge($objInvoiceSalesforce);
                $this->objEntityManager->flush();
            }
            throw $e;
        }
    }
    
    /**
     * Função que atualiza um pedido no salesforce
     * 
     * @param InvoiceSalesforce $objInvoiceSalesforce
     * @throws \Exception
     * @return object
     */
    protected function update(InvoiceSalesforce $objInvoiceSalesforce)
    {
        try {
            $objInvoice = $objInvoiceSalesforce->getInvoice();
            $objBanco = $objInvoice->getBanco();
            if(!($objBanco instanceof Banco)){
                throw new \Exception('Banco não localizado.');
            }
            $objCobrador = $objBanco->getCobrador();
            if(!($objCobrador instanceof Cobrador)){
                throw new \Exception('Cobrador não localizado.');
            }
            
            $objCustomers = $this->objCustomersRepository->find($objInvoice->getCustumer());
            if(!($objCustomers instanceof Customers)){
                throw new \Exception('Customers não localizado.');
            }
            
            $objCustomers2users = $objCustomers->getCustomers2users()->first();
            if(!($objCustomers2users instanceof Customers2users)){
                throw new \Exception('Customers2users não localizado.');
            }
            
            $objCadUsers = $objCustomers2users->getCadUser();
            if(!($objCadUsers instanceof CadUsers) || ($objCadUsers->getTipo() !== 'J')){
                throw new \Exception('CadUsers não localizado.');
            }
            
            $objAccountSalesforce = $this->objAccount->getByCnpj(str_pad($objCadUsers->getCnpj(), 14, '0', STR_PAD_LEFT));
            
            if(!$objAccountSalesforce || !is_object($objAccountSalesforce) || !property_exists($objAccountSalesforce, 'Id')){
                $this->objLogger->info("Pedido {$objInvoice->getIdInvoice()} criando Account", ['cliente'=>$objCustomers->getCustomerid()]);
                $retorno = $this->objAccount->createFromCustomer($objCustomers);
                $objAccountSalesforce = $this->objAccount->getById($retorno->id);
                $this->objLogger->info("Pedido {$objInvoice->getIdInvoice()} Account criada com sucesso", ['account'=>$objAccountSalesforce]);
            }
            
            $arrayPedido = (array)$this->objPedidoFaturamento->getById($objInvoice->getIdSalesforce());
            $id = $arrayPedido['Id'];
            $arrayPedido['CNPJ_Vogel__c'] = str_pad($objCobrador->getCnpj(), 14, '0', STR_PAD_LEFT);
            $arrayPedido['AccountId__c'] = $objAccountSalesforce->Id;
            $arrayPedido['Name'] = "Pedido {$objInvoice->getIdInvoice()}";
            $arrayPedido['Numero_da_Nota__c'] = $objInvoice->getNumeroNota();
            $arrayPedido['Numero_Pedido__c'] = $objInvoice->getIdInvoice();
            $arrayPedido['Status__c'] = (($objInvoice->getStatusInvoice()->getIdStatusInvoice() == self::STATUS_CANCELADO_PROTHEUS) ? "Cancelado" : ($objInvoice->getStatusPagamentoSalesforce() ? 'Pago' : 'Faturado'));
            $arrayPedido['Valor__c'] = $objInvoice->getValue();
            $arrayPedido['Vencimento__c'] = $objInvoice->getDateValit()->format('Y-m-d');
            $arrayPedido['Emissao__c'] = $objInvoice->getDateRecord()->format('Y-m-d');
            unset($arrayPedido['AccountId__c'], $arrayPedido['Id'], $arrayPedido['LastModifiedDate'], $arrayPedido['IsDeleted'], $arrayPedido['SystemModstamp']);
            unset($arrayPedido['SystemModstamp'], $arrayPedido['CreatedById'], $arrayPedido['CreatedDate'], $arrayPedido['LastModifiedById']);
            unset($arrayPedido['Baixar_Fatura__c'], $arrayPedido['LastViewedDate'], $arrayPedido['LastReferencedDate'], $arrayPedido['LastActivityDate']);
            $objPedidoFaturamento = $this->objPedidoFaturamento->update($arrayPedido, $id);

            $objInvoiceSalesforce->setDataIntegracao(new \DateTime());
            $objInvoiceSalesforce->setIdSalesforce($id);
            $objInvoice->setIdSalesforce($id);
            $this->objEntityManager->merge($objInvoice);
            $this->objEntityManager->merge($objInvoiceSalesforce);
            $this->objEntityManager->flush();
            return $objPedidoFaturamento;
        } catch (\Exception $e){
            if(isset($id)){
                $objInvoiceSalesforce->setDataIntegracao(new \DateTime());
                $objInvoiceSalesforce->setIdSalesforce($id);
                $objInvoice->setIdSalesforce($id);
                $this->objEntityManager->merge($objInvoice);
                $this->objEntityManager->merge($objInvoiceSalesforce);
                $this->objEntityManager->flush();
            }else{
                $objInvoiceSalesforce->setDataIntegracao(new \DateTime());
                $this->objEntityManager->merge($objInvoiceSalesforce);
                $this->objEntityManager->flush();
            }
            throw $e;
        }
    }

    protected function validate(Invoice $objInvoiceSalesforce)
    {
        try {

        } catch (\Exception $e) {
            throw $e;
        }
    }
}

