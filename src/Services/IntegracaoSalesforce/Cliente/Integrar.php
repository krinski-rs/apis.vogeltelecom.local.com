<?php
/**
 * Classe de criação de CEP.
 *
 * Classe responsável por persistir os dados de um CEP na Base de dados.
 */

namespace App\Services\IntegracaoSalesforce\Cliente;

use Doctrine\ORM\EntityManager;
use Monolog\Logger;

/**
 * Class Create
 *
 * @package     \App\Services\IntegracaoSalesforce
 * @subpackage  Cliente
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class Integrar
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \Doctrine\ORM\EntityManager $objEntityManager
     * @param   \Monolog\Logger $objLogger
     */
    public function __construct(EntityManager $objEntityManager, Logger $objLogger)
    {
        $this->objEntityManager = $objEntityManager;
        $this->objLogger = $objLogger;
    }
}

