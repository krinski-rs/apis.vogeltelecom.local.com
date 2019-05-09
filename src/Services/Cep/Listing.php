<?php
namespace App\Services\Cep;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use Monolog\Logger;

/**
 * Class Listing
 *
 * @package     \App\Services
 * @subpackage  Cep
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class Listing
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
     * @param \Doctrine\ORM\EntityManager   $objEntityManager
     * @param \Monolog\Logger               $objLogger
     */
    public function __construct(EntityManager $objEntityManager, Logger $objLogger)
    {
        $this->objEntityManager = $objEntityManager;
        $this->objLogger = $objLogger;
    }

    /**
     * Método que retorna os dados de um CEP
     * 
     * @access  public
     * @param   string $cep
     * @throws  \RuntimeException
     * @throws  \Exception
     * @return  array
     */
    public function search(string $cep)
    {
        try {
            
            $cep = $this->validate($cep);
            $objRepositoryLogLocalidade = $this->objEntityManager->getRepository('\App\Entity\Cep\LogLocalidade');
            return $objRepositoryLogLocalidade->search($cep);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Valida se a string é um CEP válido.
     * 
     * @access  private
     * @param   string $cep
     * @throws  \RuntimeException
     * @return  string
     */
    private function validate(string $cep)
    {
        $cep = preg_replace("/[^0-9]/", "", $cep);
        if (!preg_match('/^[0-9]{8}?$/', $cep)) {
            throw new \RuntimeException("CEP inválido.", Response::HTTP_PRECONDITION_FAILED);
        }
        return $cep;
    }    
}

