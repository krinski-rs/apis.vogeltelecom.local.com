<?php
/**
 * Classe de roteamento dos serviços de geolocalização.
 * 
 * Contém os endpoints dos serviços de geolocalização.
 */
namespace App\Controller\Geolocation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\Geolocation;

/**
 * Class GeolocationController
 *
 * @package     \App\Controller
 * @subpackage  Geolocation
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class GeolocationController extends AbstractController
{
    /**
     * Variável que irá guardar a referência do serviço Geolocation.
     * 
     * @access  private
     * @var     \App\Services\Geolocation
     */
    private $objGeolocation = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \App\Services\Geolocation $objGeolocation
     */
    public function __construct(Geolocation $objGeolocation){
        $this->objGeolocation = $objGeolocation;
    }
    
    /**
     * Chama o serviço que irá retornar a Latitude e a Longitude de um endereço.
     * 
     * @access  public
     * @param   string $address
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     * @example rua lubisco 112, viamão, rio grande do sul, brasil
     */
    public function getLatLon(string $address)
    {
        try {
            if(!$this->objGeolocation instanceof Geolocation){
                return new JsonResponse(['message'=> 'Class "App\Services\Geolocation" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $address = $this->objGeolocation->addressToLatLon($address);
            return new JsonResponse($address, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    /**
     * Chama o serviço que irá retornar o endereço de uma Latitude e Longitude.
     * 
     * @access  public
     * @param   float $lat
     * @param   float $lon
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     * @example -29.982719, -51.187956
     */
    public function getAddress(float $lat, float $lon)
    {
        try {
            if(!$this->objGeolocation instanceof Geolocation){
                return new JsonResponse(['message'=> 'Class "App\Services\Geolocation" not found.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $address = $this->objGeolocation->latLonToAddress($lat, $lon);
            return new JsonResponse($address, Response::HTTP_OK);
        } catch (\RuntimeException $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return new JsonResponse(['mensagem'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

