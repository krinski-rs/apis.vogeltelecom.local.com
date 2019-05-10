<?php
/**
 * Classe de consulta ao serviço da viacep.
 * 
 * Classe responsável por consultar os dados do CEP no serviço externo ViaCep.
 */

namespace App\Services;

use \Monolog\Logger;
use \Symfony\Component\HttpFoundation\Response;

/**
 * Class ViaCep
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class ViaCep
{
    /**
     * Variável que irá guardar a referência do serviço de log.
     * 
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger  = NULL;
    
    /**
     * Constante que contêm a uri padrão para consulta de cep.
     * 
     * @access  public
     * @var     string
     */
    const VIA_CEP = 'http://viacep.com.br/ws/';

    /**
     * Constante que contêm parte da uri padrão para consulta de cep.
     * 
     * Está parte da uri diz o formato de retorno do request.
     * 
     * @access  public
     * @var     string
     */
    const METHOD = '/json/';
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \Monolog\Logger $objLogger
     */
    public function __construct(Logger $objLogger)
    {
        $this->objLogger = $objLogger;
    }
    
    /**
     * Retorna os dados de um cep.
     * 
     * @access  public
     * @param   string $cep
     * @example 94440190
     * @return  array
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function search(string $cep)
    {
        try {
            $cep = $this->validate($cep);
            $resource = curl_init();
            curl_setopt($resource, CURLOPT_HEADER, false);
            $url = self::VIA_CEP . $cep . self::METHOD;
            curl_setopt($resource, CURLOPT_URL, $url);
            curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($resource, CURLOPT_SSLVERSION,3);
            $retorno = curl_exec($resource);
            curl_close($resource);
            return json_decode($retorno, true);
        } catch (\RuntimeException $e){
            throw $e;
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    /**
     * Valida um cep.
     * 
     * @access  private
     * @param   string $cep
     * @example 94440190
     * @return  string
     * @throws  \RuntimeException
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










