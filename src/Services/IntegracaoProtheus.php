<?php
/**
 * Classe de Integração
 *
 * Classe responsável pelas integrações com o Protheus.
 */

namespace App\Services;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Monolog\Logger;
use App\Services\IntegracaoProtheus\Circuito\IntegrarCircuito;
use App\Services\IntegracaoProtheus\Pedido\FtpProtheus;
use App\Services\IntegracaoProtheus\Pedido\PedidosProtheus;

/**
 * Class IntegracaoProtheus
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class IntegracaoProtheus
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManager   = NULL;
    
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManagerCobranca   = NULL;
    
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManagerProtheus   = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger  = NULL;
    
    /**
     * Obejeto que irá guardar do serviço de integração de circuito.
     *
     * @access  private
     * @var     IntegrarCircuito
     */
    private $objIntegrarCircuito  = NULL;
    
    /**
     * Variável que irá guardar os parâmetros de configuração do protheus.
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
     * @param   \Monolog\Logger   $objLogger
     */
    public function __construct(Registry $objRegistry, Logger $objLogger, IntegrarCircuito $objIntegrarCircuito, array $params)
    {
        $this->objEntityManager         = $objRegistry->getManager('mysql');
        $this->objEntityManagerCobranca = $objRegistry->getManager('cobranca');
        $this->objEntityManagerProtheus = $objRegistry->getManager('sqlserver_protheus');
        $this->objLogger                = $objLogger;
        $this->objIntegrarCircuito      = $objIntegrarCircuito;
        $this->params                   = $params;
    }
     
    /**
     * Realiza a criação/atualização de um circuito pendente de integração.
     *
     * @access  public
     * @param   int $contCodigoid
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function circuito(int $contCodigoid)
    {
        try {
            $this->objLogger->info("Início da integração do circuito {$contCodigoid}");
            $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("App\Entity\Financeiro\CircuitoSalesforce");
            $arrayCircuitoSalesforce = $objCircuitoSalesforceRepository->findBy(['contCodigoid'=>$contCodigoid, 'dataIntegracao'=>NULL]);
            if(!count($arrayCircuitoSalesforce)){
                $this->objLogger->warning("Circuito '{$contCodigoid}' não encontrado");
                throw new \Exception("Circuito '{$contCodigoid}' não encontrado.");
            }
            
            reset($arrayCircuitoSalesforce);
            while ($objCircuitoSalesforce = current($arrayCircuitoSalesforce)){
//                 $this->objIntegrarCircuito->integrar($objCircuitoSalesforce);
                next($arrayCircuitoSalesforce);
            }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Realiza a criação/atualização dos circuitos pendentes de integração.
     *
     * @access  public
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function circuitos(int $limit)
    {
        try {
            $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("App\Entity\Financeiro\CircuitoSalesforce");
            $arrayCircuitoSalesforce = $objCircuitoSalesforceRepository->findBy(['dataIntegracaoProtheus'=>NULL], ['id'=>'ASC'], $limit);
            if(!count($arrayCircuitoSalesforce)){
                throw new \Exception("Nenhum circuito à ser integrado.");
            }
            $this->objLogger->info("Início da integração do circuitos", ['total' => count($arrayCircuitoSalesforce)]);
            
            reset($arrayCircuitoSalesforce);
            while ($objCircuitoSalesforce = current($arrayCircuitoSalesforce)){
                $this->objIntegrarCircuito->integrar($objCircuitoSalesforce);
                next($arrayCircuitoSalesforce);
            }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Retorna o PDF de um Pedido se existir.
     *
     * @access  public
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function getPedidoPdf(int $idInvoice, string $cnpj)
    {
        try {
            $resourceFTP = NULL;
            $wsdl = $this->params['webservices']['V_PROT_FIN_VOGEL']['wsdl'];
            $method = $this->params['webservices']['V_PROT_FIN_VOGEL']['methods']['GERANFFATURA'];
            $objSoapClient = new \SoapClient($wsdl);
            $result = $objSoapClient->__soapCall($method, [['CPEDVOGEL' => $idInvoice, 'CCNPJEMP' => $cnpj]]);
            if(!is_object($result) || !property_exists($result, 'GERANFFATURARESULT')){
                throw new \Exception("Tipo de retorno inválido.");
            }
            
            if(!property_exists($result->GERANFFATURARESULT, 'TRETORNO_PROT_FIN')){
                throw new \Exception("Propriedade 'TRETORNO_PROT_FIN' não encontrada.");
            }
            
            if(!property_exists($result->GERANFFATURARESULT->TRETORNO_PROT_FIN, 'CJSON')){
                throw new \Exception("Propriedade 'CJSON' não encontrada.");
            }
            
            $json = json_decode($result->GERANFFATURARESULT->TRETORNO_PROT_FIN->CJSON);
            
            if(!is_object($json) || !property_exists($json, 'mensagens') || !array_key_exists(0, $json->mensagens) ){
                throw new \Exception("Objeto 'CJSON' menssagem inválida.");
            }
            
            if(!property_exists($json->mensagens[0], 'tipo') || ($json->mensagens[0]->tipo !== "sucesso")){
                throw new \Exception("PDF não encontrado.");
            }
            
            $objFtpProtheus = new FtpProtheus(
                $this->params['ftp']['host'],
                $this->params['ftp']['port'],
                $this->params['ftp']['timeout'],
                [
                    'user'=>$this->params['ftp']['user'],
                    'pass'=>$this->params['ftp']['pass']
                ]
            );
            
            $pos = strrpos($json->mensagens[0]->mensagem, "/" );
            
            if($pos === FALSE){
                throw new \Exception("Erro no path do arquivo remoto.");
            }
            
            $remotePath = substr($json->mensagens[0]->mensagem, 0, $pos);
            $remoteFile = substr($json->mensagens[0]->mensagem, ($pos+1));
            $ambi = $this->params['ftp']['ambi'];
            
            $objFtpProtheus->chdir("{$ambi}/{$remotePath}");
            return $objFtpProtheus->get($remoteFile);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }

    
    /**
     * Função que busca o status do pedido vogel no protheus
     *
     * @access  public
     * @param   int $pedido
     * @throws  \Exception
     * @return  object
     */
    public function getStatusPedido(int $pedido)
    {
        try {
            $objPedidosProtheus = new PedidosProtheus($this->objEntityManagerProtheus, $this->objLogger);
            return $objPedidosProtheus->getStatusPedido($pedido);
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Função que busca o status dos pedidos vogel no protheus
     *
     * @access  public
     * @param   array $pedido
     * @throws  \Exception
     * @return  object
     */
    public function getStatusPedidos(array $pedidos)
    {
        try {
            $objPedidosProtheus = new PedidosProtheus($this->objEntityManagerProtheus, $this->objLogger);
            return $objPedidosProtheus->getStatusPedidos($pedidos);
        } catch (\Exception $e){
            throw $e;
        }
    }
}

