<?php
namespace App\Controller\Cep;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Services\Cep;

/**
 * Class CepController
 * 
 * @package     \App\Controller
 * @subpackage  Cep
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class CepController extends AbstractController
{
    /**
     * Variável que irá guardar a referência do serviço de CEP.
     *
     * @access  private
     * @var     \App\Services\Cep
     */
    private $objCep = NULL;
    
    /**
     * @access  public
     * @param   \App\Services\Cep $objCep
     */    
    public function __construct(Cep $objCep){
        $this->objCep = $objCep;
    }
    
    /**
     * Chama o serviço que irá retornar os dados de um CEP.
     * 
     * @access  public
     * @param   string $cep
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     * @example 94440190
     */
    public function searchCep(string $cep)
    {
        try {
            $a = new CepController($objCep);
            if(!$this->objCep instanceof Cep){
                return new JsonResponse(['message'=> 'Class "App\Services\Cep" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $cep = $this->objCep->search($cep);
            return new JsonResponse($cep, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    /**
     * Chama o serviço que irá criar um CEP.
     * 
     * @access  public
     * @param   \Symfony\Component\HttpFoundation\Request $objrequest
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function createCep(Request $objrequest)
    {
        try {
            if(!$this->objCep instanceof Cep){
                return new JsonResponse(['message'=> 'Class "App\Services\Cep" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $cep = $this->objCep->create($objrequest->attributes->all());
            return new JsonResponse($cep, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }    
}

