<?php
/**
 * Classe de CEP
 * 
 * Classe responsável pela busca e inserção de um CEP.
 */
namespace App\Services;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Monolog\Logger;
use App\Services\Cep\Listing;
use Symfony\Component\HttpFoundation\Response;
use App\Services\Cep\Create;

/**
 * Class Cep
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Cep
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
    private $objLogger          = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de que busca um CEP não esta cadastrado.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objViaCep          = NULL;
    
    /**
     * Variável que irá guardar os parâmetros do serviço.
     *
     * @access  private
     * @var     array
     */
    private $params             = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   Registry $objRegistry
     * @param   ViaCep $objViaCep
     * @param   array $params
     * @param   Logger $objLogger
     */
    public function __construct(Registry $objRegistry, ViaCep $objViaCep, array $params, Logger $objLogger)
    {
        $this->objEntityManager = $objRegistry->getManager('default');
        $this->objViaCep        = $objViaCep;
        $this->params           = $params;
        $this->objLogger        = $objLogger;
    }
    
    /**
     * Método que retorna os dados de um CEP
     * 
     * @access  public
     * @param   string $cep
     * @throws  \RuntimeException
     * @throws  \Exception
     * @return  array
     * @example 94440190
     */
    public function search(string $cep)
    {
        try {
            $objListing = new Listing($this->objEntityManager, $this->objLogger);
            $resultSet = $objListing->search($cep);
            if(!count($resultSet)){
                $resultSet = $this->objViaCep->search($cep);
                if(array_key_exists('erro', $resultSet)){
                    throw new \RuntimeException("CEP não encontrado.", Response::HTTP_NOT_FOUND);
                }
                $this->create($resultSet);
                $resultSet = $objListing->search($cep);
            }
            
            return $resultSet;
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    
    /**
     * Método que cria um CEP
     *
     * @access  public
     * @param   array $params
     * @throws  \RuntimeException
     * @throws  \Exception
     * @return  array
     */
    public function create(array $params)
    {
        try {
            $tipoLogradouro = explode(" ", $params['logradouro']);
            $arrayCep = [
                'cep' => preg_replace("/[^0-9]/", "", $params['cep']),
                'tipoLogradouro' => (in_array($tipoLogradouro[0], $this->params['tipo_logradouro'])?$tipoLogradouro[0]:'Rua'),
                'logNo' => str_replace($this->params['tipo_logradouro'], '', $params['logradouro']),
                'logradouro' => $params['logradouro'],
                'bairro' => $params['bairro'],
                'localidade' => $params['localidade'],
                'uf' => $params['uf']
            ];
            $objCreate = new Create($this->objEntityManager, $this->objLogger);
            return $objCreate->insert($arrayCep);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

