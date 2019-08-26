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
use Doctrine\DBAL\Connection;

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
            
            
            $objConnection = $this->objEntityManagerProtheus->getConnection();
            $statement = "";
            if($objConnection instanceof Connection){
//                 $objConnection->connect();
//                 $statement = "SELECT
// 	E1_NUM AS							'Número do título',
// 	RTRIM(E1_P_REF) AS						'Pedido Vogel',
// 	E1_NUMBOR AS							'Número do borderô',
// 	E1_PORTADO AS							'Portador(banco)',
// 	E1_PREFIXO AS							'Prefixo',
// 	Convert(varchar(10),cast(E1_BAIXA as date),103) AS		'Data da baixa(Protheus)',
// 	Convert(varchar(10),cast(E1_VENCORI as date),103) AS		'Data de vencimento da origem(Protheus)',
// 	Convert(varchar(10),cast(E1_VENCTO as date),103) AS 		'Data de vencimento(Protheus)',
// 	E1_DESCONT AS							'Desconto'
// FROM  SE1V50 AS E1
// WHERE E1_P_REF <> '' LIMIT 1;";
// //                 $objConnection->prepare($statement);
// //                 $objConnection->
//                 $a = $objConnection->executeQuery($statement);
            }
            echo "<pre>";
            \Doctrine\Common\Util\Debug::dump($objConnection, 2);
            \Doctrine\Common\Util\Debug::dump($statement, 2);
           echo "lajdfahkldjas";
            exit();
            
            
            $arrayPedido = [
                'CNPJ_Vogel__c'=> str_pad($objCobrador->getCnpj(), 14, '0', STR_PAD_LEFT),
                'AccountId__c'=> $objAccountSalesforce->Id,
                'Name'=> "Pedido {$objInvoice->getIdInvoice()}",
                'Numero_da_Nota__c' => '',
                'Numero_Pedido__c' => $objInvoice->getIdInvoice(),
                'Status__c' => 'Faturado' ,
                'Valor__c' => $objInvoice->getValue(),
                'Vencimento__c' => $objInvoice->getDateValit()->format('Y-m-d')
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
//         try {
//             $objContrato = $objCircuitoSalesforce->getContCodigoid();
//             $objEnderecoentrega = $objContrato->getEndeentrCodigoid();
//             $objCustomers = $objContrato->getContPaicodigoid()->getCustomers();
//             if(!($objCustomers instanceof Customers)){
//                 $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cliente não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
//                 throw new \Exception('Cliente não localizado');
//             }
            
//             $objCustomers2users = $objCustomers->getCustomers2users()->first();
//             if(!($objCustomers2users instanceof Customers2users)){
//                 $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Customers2users não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
//                 throw new \Exception('Customers2users não localizado');
//             }
            
//             $objCadUser = $objCustomers2users->getCadUser();
//             if(!($objCadUser instanceof CadUsers)){
//                 $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} CadUsers não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
//                 throw new \Exception('CadUsers não localizado');
//             }
            
//             if($objCadUser->getTipo() == 'J'){
//                 $objAccountSalesforce = $this->objAccount->getByCnpj(str_pad($objCadUser->getCnpj(), 14, '0', STR_PAD_LEFT));
//             }else{
//                 /*
//                  * ********************************************* *
//                  * NÃO ESTÁ INTEGRANDO OS CLIENTES PESSOA FÍSICA *
//                  * ********************************************* *
//                  */
//                 $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
//                 $this->objEntityManager->merge($objCircuitoSalesforce);
//                 $this->objEntityManager->flush();
//                 return true;
//             }
            
//             if(!$objAccountSalesforce || !is_object($objAccountSalesforce) || !property_exists($objAccountSalesforce, 'Id')){
//                 $this->objLogger->info("Circuito {$objContrato->getContCodigoid()} Account NÃO LOCALIZADO", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
//                 throw new \Exception('Account NÃO LOCALIZADO');
//             }
            
//             $objCidade = $objEnderecoentrega->getAdmCidades();
//             if(!($objCidade instanceof AdmCidades)){
//                 $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cidade não localizada", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
//                 throw new \Exception('Cidade não localizada');
//             }
            
//             $objCidadeSalesforce = $this->objCidade->getByCodigoIbge($objCidade->getCodigoIbge());
//             $id = explode('/', $this->objOAuthSalesforce->getContents()->id);
//             $logradouro = explode('-::-', $objEnderecoentrega->getEndeentrLogradouro());
            
//             $stt = $objContrato->getStt();
//             if($objContrato->getDesigCodigoid()->getDesigStt()){
//                 $stt = "{$objContrato->getStt()}-{$objContrato->getDesigCodigoid()->getDesigPonta()}";
//             }
            
//             $arrayEndereco = (array)$this->objEndereco->getByDesignador($stt);
//             $tipoLogradouro = $objEnderecoentrega->getAdmLogradouro();
//             $arrayEndereco['Bairro__c'] = trim($objEnderecoentrega->getEndeentrBairro());
//             $arrayEndereco['CEP__c'] = $this->somenteNumeros($objEnderecoentrega->getEndeentrCep());
//             $arrayEndereco['Cidade__c'] = $objCidadeSalesforce->Id;
//             $arrayEndereco['Complemento__c'] = '';
//             $arrayEndereco['Conta__c'] = $objAccountSalesforce->Id;
//             $arrayEndereco['Name'] = $stt;
//             $arrayEndereco['Designador__c'] = $stt;
//             $arrayEndereco['Estado__c'] = $objCidade->getAdmUf()->getSigla();
//             $arrayEndereco['EstruturaFisica__c'] = 'Predio';
//             $arrayEndereco['Logradouro__c'] = ((count($logradouro) > 1) ? trim(iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($logradouro[1]))) : iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($logradouro[0])));
//             $arrayEndereco['Numero__c'] = $objEnderecoentrega->getEndeentrNumero();
//             $arrayEndereco['TipoEndereco__c'] = 'Instalação';
//             $arrayEndereco['TipoLogradouro__c'] = ($tipoLogradouro ? $tipoLogradouro->getId() : '160');
//             $idEndereco = $arrayEndereco['Id'];
//             unset($arrayEndereco['Id'], $arrayEndereco['LastModifiedDate'], $arrayEndereco['LastReferencedDate'], $arrayEndereco['Geolocalizacao__c']);
//             unset($arrayEndereco['CreatedById'], $arrayEndereco['IsDeleted'], $arrayEndereco['LastViewedDate'], $arrayEndereco['SystemModstamp']);
//             unset($arrayEndereco['CreatedDate'], $arrayEndereco['LastModifiedById']);
// //             print_r($id);
// //             print_r($arrayEndereco);
            
//             $objEndereco = $this->objEndereco->update($arrayEndereco, $idEndereco);
//             $objEnderecoPontaB = NULL;
//             if($objEnderecoentrega->getCircuitos()->count()){
//                 $objCircuitoGcdb = $objEnderecoentrega->getCircuitos()->first();
                
//                 if($objCircuitoGcdb instanceof CircuitoGcdb){
                    
//                     if($objCircuitoGcdb->getCircuitoPop()->count()){
//                         $objCircuitoPop = $objCircuitoGcdb->getCircuitoPop()->filter(
//                             function(CircuitoPop $objCircuitoPop){
//                                 return $objCircuitoPop->getAtivo();
//                             }
//                             )->first();
//                             $objEnderecoPontaB = NULL;
//                             if($objCircuitoPop instanceof CircuitoPop){
//                                 $objPop = $objCircuitoPop->getPop();
                                
//                                 if($objPop instanceof Pop){
//                                     $objEnderecoPontaB = $this->objEndereco->getByName(trim("POP - ".$objPop->getNome()));
//                                 }
//                             }
//                     }
//                 }
//             }
            
//             $velocidade = NULL;
//             $objContratoservico = $objContrato->getContratoservico()->first();
//             $objProdutoSalesforce = NULL;
//             if($objContratoservico instanceof Contratoservico){
//                 $produto = $objContratoservico->getServcapaCodigoid()->getServCodigoid()->getServNome();
//                 $objProdutoSalesforce = $this->objProduto->getByName($produto);
//                 $medida = $objContratoservico->getServcapaCodigoid()->getMediCodigoid()->getMediNome();
//                 $velocidade = $objContratoservico->getServcapaCodigoid()->getCapaCodigoid()->getCapaCapacidade();
//                 switch($medida){
//                     case 'Megabit':
//                         $medida = "Mbps";
//                         break;
//                     case 'Kilobit':
//                         $medida = "Kbps";
//                         break;
//                     case 'bit':
//                         $velocidade = ($velocidade/1024);
//                         $medida = "Kbps";
//                         break;
//                     case 'Gigabit':
//                         $medida = "Gbps";
//                         break;
//                     case 'Megabyte':
//                         $medida = "Mbps";
//                         break;
//                     case 'Gigabyte':
//                         $medida = "Gbpps";
//                         break;
//                     case 'byte':
//                         $velocidade = ($velocidade/1024);
//                         $medida = "Kbps";
//                         break;
//                     default:
//                         $velocidade = "";
//                         $medida = "";
//                         break;
//                 }
//             }
            
//             $status = NULL;
// //             if(array_key_exists($objContrato->getStatCodigoid()->getStatCodigoid(), Circuit::$arrayEmAtivacao)){
// //                 $status = Circuit::$arrayEmAtivacao[$objContrato->getStatCodigoid()->getStatCodigoid()];
// //             }else{
// //                 $status = $objContrato->getStatCodigoid()->getStatNome();
// //             }

//             $arrayCircuit = (array)$this->objCircuit->getByCircuito($objContrato->getContCodigoid());
//             $arrayCircuit['Name'] = trim($objContrato->getStt());
//             $arrayCircuit['CNPJ__c'] = $objAccountSalesforce->CNPJ__c;
//             $arrayCircuit['Codigo__c'] = $objContrato->getStt();
//             $arrayCircuit['CircuitoId__c'] = $objContrato->getContCodigoid();
//             $arrayCircuit['Endereco__c'] = $idEndereco;
//             $arrayCircuit['NomeCliente__c'] = $objAccountSalesforce->Name;
//             $arrayCircuit['PontaB__c'] = ($objEnderecoPontaB ? $objEnderecoPontaB->Id : $objEnderecoPontaB);
//             $arrayCircuit['Status__c'] = $status;
//             $arrayCircuit['Velocidade__c'] = $velocidade;
//             $arrayCircuit['Un_Medida_Velocidade__c'] = $medida;
            
//             $idCircuit = $arrayCircuit['Id'];
//             unset($arrayCircuit['Id'], $arrayCircuit['LastModifiedDate'], $arrayCircuit['LastReferencedDate'], $arrayCircuit['EnderecoPontaA__c']);
//             unset($arrayCircuit['CreatedById'], $arrayCircuit['Identificador__c'], $arrayCircuit['IsDeleted'], $arrayCircuit['EnderecoCompleto__c']);
//             unset($arrayCircuit['Acessar__c'], $arrayCircuit['LastViewedDate'], $arrayCircuit['EnderecoPontaB__c'], $arrayCircuit['SystemModstamp']);
//             unset($arrayCircuit['CreatedDate'], $arrayCircuit['LastActivityDate'], $arrayCircuit['LastModifiedById'], $arrayCircuit['Conta__c']);
//             unset($arrayCircuit['cidade_pb__c'], $arrayCircuit['cidade_pa__c'], $arrayCircuit['Regional_Atendimento__c'], $arrayCircuit['estado_pa__c']);
//             unset($arrayCircuit['Editar_Circuitos__c'], $arrayCircuit['estado_pb__c'], $arrayCircuit['Peso_do_Circuito__c'], $arrayCircuit['Velocidade_Mbps__c']);
//             $objCircuito = $this->objCircuit->update($arrayCircuit, $idCircuit);
            
//             $arrayEnderecoentregaatributovalor = $objContrato->getEnderecoentregaatributovalor();
//             if($arrayEnderecoentregaatributovalor->count()){
//                 $arrayEnderecoentregaatributovalor->first();
//                 while ($objEnderecoentregaatributovalor = $arrayEnderecoentregaatributovalor->current()){
//                     if($objEnderecoentregaatributovalor instanceof Enderecoentregaatributovalor){
//                         $name = $objEnderecoentregaatributovalor->getAtrivaloCodigoid()->getAtriCodigoid()->getAtriNome();
//                         $valor = $objEnderecoentregaatributovalor->getAtrivaloCodigoid()->getAtrivaloValor();
//                         $valor.= " {$objEnderecoentregaatributovalor->getEndeentratrivaloValor()}";
//                         $arrayAtributo = (array)$this->objAtributo->getByAtributo($objEnderecoentregaatributovalor->getEndeentratrivaloCodigoid());
//                         if(count($arrayAtributo)){
//                             $idAtributo = $arrayAtributo['Id'];
//                             $arrayAtributo['Name'] = $name;
//                             $arrayAtributo['Valor__c'] = iconv('UTF-8', 'ASCII//TRANSLIT', trim(substr($valor, 0, 255)));
//                             unset($arrayAtributo['Id'], $arrayAtributo['LastModifiedDate'], $arrayAtributo['IsDeleted'], $arrayAtributo['SystemModstamp']);
//                             unset($arrayAtributo['Id'], $arrayAtributo['CreatedById'], $arrayAtributo['CreatedDate'], $arrayAtributo['LastActivityDate']);
//                             unset($arrayAtributo['LastModifiedById']);
//                             $this->objAtributo->update($arrayAtributo, $idAtributo);
//                         }
//                     }
//                     $arrayEnderecoentregaatributovalor->next();
//                 }
//             }
            
//             $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
//             $objCircuitoSalesforce->setIdCircuitoSalesforce($idCircuit);
//             $objContrato = $objCircuitoSalesforce->getContCodigoid();
//             $objContrato->setSalesforceId($idCircuit);
//             $this->objEntityManager->merge($objContrato);
//             $this->objEntityManager->merge($objCircuitoSalesforce);
//             $this->objEntityManager->flush();
//             return $objCircuito;
//         } catch (\Exception $e){
//             if(isset($idCircuit)){
//                 $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
//                 $objCircuitoSalesforce->setIdCircuitoSalesforce($idCircuit);
//                 $objContrato = $objCircuitoSalesforce->getContCodigoid();
//                 $objContrato->setSalesforceId($idCircuit);
//                 $this->objEntityManager->merge($objContrato);
//                 $this->objEntityManager->merge($objCircuitoSalesforce);
//                 $this->objEntityManager->flush();
//             }else{
//                 $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
//                 $this->objEntityManager->merge($objCircuitoSalesforce);
//                 $this->objEntityManager->flush();
//             }
//             throw $e;
//         }
    }

    protected function validate(Invoice $objInvoiceSalesforce)
    {
        try {

        } catch (\Exception $e) {
            throw $e;
        }
    }
}

