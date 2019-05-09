<?php
namespace App\Services;

use Monolog\Logger;
use App\Services\Geolocation\Address;

/**
 * Class Geolocation
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Geolocation
{
    /**
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
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
     * @param   \Monolog\Logger   $objLogger
     * @param   array             $params
     */
    public function __construct(Logger $objLogger, array $params)
    {
        $this->objLogger    = $objLogger;
        $this->params       = $params;
    }
    
    /**
     * Chama o serviço que irá tratar a conversãodo endereço em latitude e longitude.
     *
     * @access  public
     * @param   string $address
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function addressToLatLon(string $address)
    {
        try {
            $objAddress = new Address($this->objLogger, $this->params);
            return $objAddress->addressToLatLon($address);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Chama o serviço que irá tratar a conversão da latitude e longitude em endereço.
     *
     * @access  public
     * @param   float $lat
     * @param   float $lon
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function latLonToAddress(float $lat, float $lon)
    {
        try {
            $objAddress = new Address($this->objLogger, $this->params);
            return $objAddress->latLonToAddress($lat, $lon);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
}

