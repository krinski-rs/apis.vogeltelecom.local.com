<?php
/**
 * Classe Responsável pelo parseamento do endereço e coordenadas
 * 
 * Responsável pela consulta nos serviços da api de geolocalização do google.
 */
namespace App\Services\Geolocation;

use \Monolog\Logger;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Address
 *
 * @package     \App\Services
 * @subpackage  Geolocation
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class Address
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objLogger  = NULL;
    
    /**
     * Variável que irá guardar os parâmetros do serviço.
     *
     * @access  private
     * @var     array
     */
    private $params     = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \Monolog\Logger $objLogger
     * @param   array $params
     */
    public function __construct (Logger $objLogger, array $params)
    {
        $this->objLogger    = $objLogger;
        $this->params       = $params;
    }
    
    /**
     * Metodo que responsável pela conversão do endereço em latitude e longitude.
     * 
     * @access  public
     * @param   string $address
     * @throws  \RuntimeException
     * @throws  \Exception
     * @return  array
     */
    public function addressToLatLon(string $address)
    {
        try {
            $address = urlencode($address);
            $url = "{$this->params['uri_geolocation']}{$this->params['type']}?address={$address}&key={$this->params['api_key']}";
            $resource = curl_init();
            
            curl_setopt($resource, CURLOPT_URL, $url);
            curl_setopt($resource, CURLOPT_RETURNTRANSFER, 1);
            $responseJson = curl_exec($resource);
            curl_close($resource);
            
            $response = json_decode($responseJson);
            
            if ($response->status == 'OK') {
                return [
                    'latitude'  => $response->results[0]->geometry->location->lat,
                    'longitude' => $response->results[0]->geometry->location->lng
                ];
            } else {
                throw new \RuntimeException($response->status, Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Metodo que responsável pela conversão da latitude e longitude em endereço.
     *
     * @access  public
     * @param   float $lat
     * @param   float $lon
     * @throws  \RuntimeException
     * @throws  \Exception
     * @return  array
     */
    public function latLonToAddress(float $lat, float $lon)
    {
        try {
            echo $url = "{$this->params['uri_geolocation']}{$this->params['type']}?latlng={$lat},{$lon}&key={$this->params['api_key']}";
            $resource = curl_init();
            
            curl_setopt($resource, CURLOPT_URL, $url);
            curl_setopt($resource, CURLOPT_RETURNTRANSFER, 1);
            $responseJson = curl_exec($resource);
            curl_close($resource);
            
            $response = json_decode($responseJson);
            $retorno = [];
            
            if ($response->status == 'OK') {
                $result = $response->results[0];
                if(property_exists($result, 'address_components')){
                    $retorno['logradouro'] = (array_key_exists(0, $result->address_components) ? $result->address_components[1]->long_name : '');
                    $retorno['bairro'] = (array_key_exists(1, $result->address_components) ? $result->address_components[2]->long_name : '');
                    $retorno['localidade'] = (array_key_exists(2, $result->address_components) ? $result->address_components[3]->long_name : '');
                    $retorno['estado'] = (array_key_exists(3, $result->address_components) ? $result->address_components[4]->long_name : '');
                    $retorno['pais'] = (array_key_exists(4, $result->address_components) ? $result->address_components[5]->long_name : '');
                    $retorno['cep'] = (array_key_exists(5, $result->address_components) ? $result->address_components[6]->long_name : '');
                }
                if(property_exists($result, 'formatted_address')){
                    $retorno['endereco'] = $result->formatted_address;
                }
                return $retorno;
            } else {
                throw new \RuntimeException($response->status, Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

