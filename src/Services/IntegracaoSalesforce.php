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
    public function __construct(Registry $objRegistry, Logger $objLogger, IntegrarCircuito $objIntegrarCircuito)
    {
        $this->objEntityManager     = $objRegistry->getManager('mysql');
        $this->objLogger            = $objLogger;
        $this->objIntegrarCircuito  = $objIntegrarCircuito;
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
            $objCircuitoSalesforceRepository = $this->objEntityManager->getRepository("App\Entity\Financeiro\CircuitoSalesforce");
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
}

