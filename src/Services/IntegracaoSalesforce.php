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
use App\Entity\Financeiro\CircuitoSalesforce;
use App\Services\IntegracaoSalesforce\OAuthSalesforce;

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
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger  = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de autenticação.
     *
     * @access  private
     * @var     OAuthSalesforce
     */
    private $objOAuthSalesforce  = NULL;
    
    /**
     * Obejeto que irá guardar do serviço de integração de circuito.
     *
     * @access  private
     * @var     IntegrarCircuito
     */
    private $objIntegrarCircuito  = NULL;
    
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   Registry $objRegistry
     * @param   \Monolog\Logger   $objLogger
     * @param   OAuthSalesforce   $objOAuthSalesforce
     */
    public function __construct(Registry $objRegistry, Logger $objLogger, OAuthSalesforce $objOAuthSalesforce)
    {
        $this->objEntityManager     = $objRegistry->getManager('financeiro');
        $this->objEntityManagerGcdb = $objRegistry->getManager('gcdb');
        $this->objLogger            = $objLogger;
        $this->objIntegrarCircuito  = new IntegrarCircuito($this->objEntityManager, $this->objEntityManagerGcdb, $this->objLogger);
        $this->objOAuthSalesforce   = $objOAuthSalesforce;
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
            $this->objOAuthSalesforce->login();
            exit();
            $this->objLogger->error("teste");
            $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("App\Entity\Financeiro\CircuitoSalesforce");
            $arrayCircuitoSalesforce = $objCircuitoSalesforceRepository->findBy(['contCodigoid'=>$contCodigoid, 'dataIntegracao'=>NULL]);
            if(!count($arrayCircuitoSalesforce)){
                throw new \Exception("Circuito '{$contCodigoid}' não encontrado.");
            }
            
            reset($arrayCircuitoSalesforce);
            while ($objCircuitoSalesforce = current($arrayCircuitoSalesforce)){
                print_r($this->objIntegrarCircuito->integrar($objCircuitoSalesforce));
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
    public function circuitos()
    {
        try {
            $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("App\Entity\Financeiro\CircuitoSalesforce");
            $arrayCircuitoSalesforce = $objCircuitoSalesforceRepository->findBy(['dataIntegracao'=>NULL]);
            if(!count($arrayCircuitoSalesforce)){
                throw new \Exception("Nenhum circuito à ser integrado.");
            }
            
            reset($arrayCircuitoSalesforce);
            while ($objCircuitoSalesforce = current($arrayCircuitoSalesforce)){
                print_r($this->objIntegrarCircuito->integrar($objCircuitoSalesforce));
                next($arrayCircuitoSalesforce);
            }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

