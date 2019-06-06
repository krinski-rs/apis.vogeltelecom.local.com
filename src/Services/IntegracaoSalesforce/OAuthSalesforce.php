<?php
/**
 * Classe de autenticação
 *
 * Classe responsável pelas autenticações com o salesforce.
 */

namespace App\Services\IntegracaoSalesforce;

use \Monolog\Logger;

/**
 * Class OAuthSalesforce
 *
 * @package \App\Services\IntegracaoSalesforce
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class OAuthSalesforce
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
     * Variável que irá quardar os dados se o login for ralizado com sucesso.
     * 
     * @var object|NULL
     */
    private $objContents = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \Monolog\Logger   $objLogger
     * @param   array   $params
     */
    public function __construct(Logger $objLogger, array $params)
    {
        $this->objLogger    = $objLogger;
        $this->params       = $params;
        $this->objClient    = new \GuzzleHttp\Client();
    }
    
    private function authorize()
    {
        try {
            $params = [
                'form_params' => $this->params['oauth']['auth'],
                'headers' => ['Accept'=>'application/json']
            ];
            
            $objGuzzleHttpResponse = $this->objClient->request("POST", $this->params['oauth']['token'], $params);
            if(!($objGuzzleHttpResponse instanceof \GuzzleHttp\Psr7\Response) && !((integer)$objGuzzleHttpResponse->getStatusCode() === 200)){
                throw new \Exception('Erro na autenticação.');
            }
            
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
            
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function getContents()
    {
        return $this->objContents;
    }
    
    public function getAccessToken()
    {
        if(!$this->objContents || !is_object($this->objContents) || !property_exists($this->objContents, 'access_token')){
            return NULL;
        }
        return $this->objContents->access_token;
    }
    
    public function getTokenType()
    {
        if(!$this->objContents || !is_object($this->objContents) || !property_exists($this->objContents, 'token_type')){
            return NULL;
        }
        return $this->objContents->token_type;
    }
    
    public function login()
    {
        try {
            $this->objContents = $this->authorize();
            return $this;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

