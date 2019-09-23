<?php
/**
 * Classe de integração.
 *
 * Classe responsável instanciar o serviço que irá criar ou atualizar circuitos no salesforce.
 */

namespace App\Services\IntegracaoSalesforce\DBAL;

use Monolog\Logger;
use App\Services\IntegracaoSalesforce\OAuthSalesforce;

/**
 * Class IntegrarCircuito
 *
 * @package     \App\Services\IntegracaoSalesforce
 * @subpackage  Circuito
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class Cases
{
    /**
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de autenticação.
     *
     * @access  private
     * @var     OAuthSalesforce
     */
    private $objOAuthSalesforce  = NULL;
    
    /**
     * Variável que irá guardar a referência do GuzzleHttp\Client.
     *
     * @access  private
     * @var     \GuzzleHttp\Client
     */
    private $objClient  = NULL;
    
    /**
     * Variável que irá guardar a query que será executada.
     *
     * @access  private
     * @var     string
     */
    private $query = "";
    
    /**
     * Variável que irá guardar id do cliente.
     *
     * @access  private
     * @var     string
     */
    private $id = "";
    
    /**
     * Variável que irá guardar o toke de acesso a API.
     *
     * @access  private
     * @var     string
     */
    private $accessToken = "";
    
    /**
     * Variável que irá guardar os parametros de configuração.
     *
     * @access  private
     * @var     array
     */
    private $params  = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \Monolog\Logger $objLogger
     * @param   OAuthSalesforce $objOAuthSalesforce
     */
    public function __construct(Logger $objLogger, OAuthSalesforce $objOAuthSalesforce, array $params)
    {
        $this->objLogger            = $objLogger;
        $this->objOAuthSalesforce   = $objOAuthSalesforce;
        $this->objClient    = new \GuzzleHttp\Client();
        $this->params = $params;
        
        $this->objOAuthSalesforce->login();
        
        $this->accessToken = "{$this->objOAuthSalesforce->getTokenType()} {$this->objOAuthSalesforce->getAccessToken()}";
        $this->id = explode('/', $this->objOAuthSalesforce->getContents()->id);        
    }
    
    /**
     * Função que retorna um array com os dados de de um ou mais Cases.
     * 
     * @access  public
     * @return  array
     * @throws  \Exception
     */
    public function listBaResolvido()
    {
        try {
            $query = "select id, CaseNumber, Account.Name, Account.id, Account.CNPJ__c, Account.CID__c, Circuito__r.Codigo__c, Contact.id, Contact.Name, Contact.Phone, Contact.MobilePhone from Case where Type = 'BA' AND StatusAtendimento__c = 'Resolvido' limit 20";
            $url = "{$this->params['base']}{$this->params['query']['url']}".$query;
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\Exception $e){
            throw $e;
        }
    }
}

