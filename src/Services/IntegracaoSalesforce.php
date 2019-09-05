<?php
/**
 * Classe de Integração
 *
 * Classe responsável pelas integrações com o salesforce.
 */

namespace App\Services;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Monolog\Logger;
use App\Services\IntegracaoSalesforce\Circuito\IntegrarCircuito;
use App\Services\IntegracaoSalesforce\Pedido\IntegrarPedido;
use App\Services\IntegracaoSalesforce\OAuthSalesforce;
use Doctrine\DBAL\Connection;

/**
 * Class IntegracaoSalesforce
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class IntegracaoSalesforce
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
     * Obejeto que irá guardar do serviço de integração de pedido.
     *
     * @access  private
     * @var     IntegrarPedido
     */
    private $objIntegrarPedido  = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   Registry $objRegistry
     * @param   \Monolog\Logger   $objLogger
     * @param   OAuthSalesforce   $objOAuthSalesforce
     */
    public function __construct(Registry $objRegistry, Logger $objLogger, IntegrarCircuito $objIntegrarCircuito, IntegrarPedido $objIntegrarPedido)
    {
        $this->objEntityManager         = $objRegistry->getManager('mysql');
        $this->objEntityManagerCobranca = $objRegistry->getManager('cobranca');
        $this->objEntityManagerProtheus = $objRegistry->getManager('sqlserver_protheus');
        $this->objLogger                = $objLogger;
        $this->objIntegrarCircuito      = $objIntegrarCircuito;
        $this->objIntegrarPedido        = $objIntegrarPedido;
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
            $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("AppEntity:Financeiro\CircuitoSalesforce");
            $arrayCircuitoSalesforce = $objCircuitoSalesforceRepository->findBy(['contCodigoid'=>$contCodigoid, 'dataIntegracao'=>NULL], ['id'=>'DESC']);
            if(!count($arrayCircuitoSalesforce)){
                $this->objLogger->warning("Circuito '{$contCodigoid}' não encontrado");
                throw new \Exception("Circuito '{$contCodigoid}' não encontrado.");
            }
            
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
            $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("AppEntity:Financeiro\CircuitoSalesforce");
            $arrayCircuitoSalesforce = $objCircuitoSalesforceRepository->findBy(['dataIntegracao'=>NULL], ['id'=>'ASC'], $limit);
            if(!count($arrayCircuitoSalesforce)){
                throw new \Exception("Nenhum circuito à ser integrado.");
            }
            
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
     * Realiza a criação/atualização de um pedido pendente de integração.
     *
     * @access  public
     * @param   int $pedido
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function pedido(int $pedido)
    {
        try {
            $this->objLogger->info("Início da integração do circuito {$pedido}");
//             $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("App\Entity\Financeiro\CircuitoSalesforce");
//             $arrayCircuitoSalesforce = $objCircuitoSalesforceRepository->findBy(['contCodigoid'=>$contCodigoid, 'dataIntegracao'=>NULL], ['id'=>'DESC']);
//             if(!count($arrayCircuitoSalesforce)){
//                 $this->objLogger->warning("Circuito '{$contCodigoid}' não encontrado");
//                 throw new \Exception("Circuito '{$contCodigoid}' não encontrado.");
//             }
            
//             reset($arrayCircuitoSalesforce);
//             while ($objCircuitoSalesforce = current($arrayCircuitoSalesforce)){
//                 $this->objIntegrarCircuito->integrar($objCircuitoSalesforce);
//                 next($arrayCircuitoSalesforce);
//             }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Realiza a criação/atualização dos pedidos pendentes de integração.
     *
     * @access  public
     * @param   int $limit
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function pedidos(int $limit)
    {
        try {
            $objInvoiceSalesforceRepository = $this->objEntityManagerCobranca->getRepository("AppEntity:Cobranca\InvoiceSalesforce");
            $arrayInvoiceSalesforce = $objInvoiceSalesforceRepository->findBy(['dataIntegracao'=>NULL], ['id'=>'ASC'], $limit);
            if(!count($arrayInvoiceSalesforce)){
                throw new \Exception("Nenhum pedido à ser integrado.");
            }
            
            reset($arrayInvoiceSalesforce);
            while ($objInvoiceSalesforce = current($arrayInvoiceSalesforce)){
                $this->objIntegrarPedido->integrar($objInvoiceSalesforce);
                next($arrayInvoiceSalesforce);
            }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Busca o status de pagamento dos pedidos no protheus.
     *
     * @access  public
     * @param  array
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function updateStatusPedidos(array $pedidos)
    {
        try {
            if(count($pedidos))
            $objConnection = $this->objEntityManagerProtheus->getConnection();
            
            $statement = "";
            if($objConnection instanceof Connection){
                $objConnection->connect();
                
//                 $objConnection->l
//                 $objConnection->connect();
                $statement = "SELECT
                	E1_NUM AS							'Número do título',
                	RTRIM(E1_P_REF) AS						'Pedido Vogel',
                	E1_NUMBOR AS							'Número do borderô',
                	E1_PORTADO AS							'Portador(banco)',
                	E1_PREFIXO AS							'Prefixo',
                	Convert(varchar(10),cast(E1_BAIXA as date),103) AS		'Data da baixa(Protheus)',
                	Convert(varchar(10),cast(E1_VENCORI as date),103) AS		'Data de vencimento da origem(Protheus)',
                	Convert(varchar(10),cast(E1_VENCTO as date),103) AS 		'Data de vencimento(Protheus)',
                	E1_DESCONT AS							'Desconto'
                FROM  SE1V50 AS E1
                WHERE E1_P_REF <> '' AND RTRIM(E1_P_REF) = '168420';";
//                 $objConnection->prepare($statement);
//                 //                 $objConnection->
                                $a = $objConnection->executeQuery($statement);
                                \Doctrine\Common\Util\Debug::dump($a->fetchAll(), 2);
            }
//             $objPDO = new \PDO("sqlsrv:Server=187.94.58.102:52731;Database=SQLSERVER;", 'usr_NRS3VM_READ', 'GdZIxcJRlor3gGD');
//             echo "<pre>";
//             \Doctrine\Common\Util\Debug::dump($objConnection, 2);
//             \Doctrine\Common\Util\Debug::dump($objConnection->isConnected(), 2);
//             echo "\n";
            \Doctrine\Common\Util\Debug::dump(\PDO::getAvailableDrivers(), 2);
            echo "\nFIM\n";
            exit();
            
//             $objInvoiceSalesforceRepository = $this->objEntityManagerCobranca->getRepository("AppEntity:Cobranca\InvoiceSalesforce");
//             $arrayInvoiceSalesforce = $objInvoiceSalesforceRepository->findBy(['dataIntegracao'=>NULL], ['id'=>'ASC'], $limit);
//             if(!count($arrayInvoiceSalesforce)){
//                 throw new \Exception("Nenhum pedido à ser integrado.");
//             }
            
//             reset($arrayInvoiceSalesforce);
//             while ($objInvoiceSalesforce = current($arrayInvoiceSalesforce)){
//                 $this->objIntegrarPedido->integrar($objInvoiceSalesforce);
//                 next($arrayInvoiceSalesforce);
//             }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    
    
}

