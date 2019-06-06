<?php
/**
 * Classe responsavel pela pesquida de Cidade no salesforce.
 *
 */

namespace App\Services\IntegracaoSalesforce\Circuito;

use \Monolog\Logger;

/**
 * Class Cidade
 *
 * @package \App\Services\IntegracaoSalesforce
 * @subpackage  Circuito
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Cidade
{
    /**
     * Variável que irá guardar a referência do GuzzleHttp\Client.
     *
     * @access  private
     * @var     \GuzzleHttp\Client
     */
    private $objClient  = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger  = NULL;
    
    /**
     * Variável que irá guardar os parametros de configuração.
     *
     * @access  private
     * @var     array
     */
    private $params  = NULL;
    
    /**
     * Variável que irá quardar o token de acesso fornecido pela api de autenticação.
     *
     * @var string
     */
    private $accessToken = NULL;
    
    /**
     * Retorna a instância do objeto.
     *
     * @access  public
     * @param   \Monolog\Logger $objLogger
     * @param   string  $accessToken
     */
    public function __construct(Logger $objLogger, array $params, string $accessToken)
    {
        $this->objLogger    = $objLogger;
        $this->params       = $params;
        $this->accessToken  = $accessToken;
        $this->objClient    = new \GuzzleHttp\Client();
    }
    
    public function describe()
    {
        try {
            $url = "{$this->params['base']}{$this->params['endereco']['url']}/describe";
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function getByCodigoIbge(string $codigoIbge)
    {
        try {
            $cnpj = $this->somenteNumeros($codigoIbge);
            //             $url = "{$this->params['base']}{$this->params['account']['url']}/0012E00001r3jvUQAQ";
            $url = "{$this->params['base']}{$this->params['cidade']['url']}/CodigoIBGE__c/{$codigoIbge}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    private function somenteNumeros($str)
    {
        return preg_replace("/[^0-9]/", "", $str);
    }
}

