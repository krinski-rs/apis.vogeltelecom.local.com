<?php
/**
 * Classe responsavel pela pesquida e inserção de Atributo no salesforce.
 *
 */

namespace App\Services\IntegracaoSalesforce\Circuito;

use \Monolog\Logger;

/**
 * Class Atributo
 *
 * @package \App\Services\IntegracaoSalesforce
 * @subpackage  Circuito
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Atributo
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
    
    public function getById(string $id)
    {
        try {
            $url = "{$this->params['base']}{$this->params['circuito_atributo']['url']}/{$id}";
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
    
    public function getByAtributo(string $idC)
    {
        try {
            $url = "{$this->params['base']}{$this->params['circuito_atributo']['url']}/ID__c/{$idC}";
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
    
    public function create(array $arrayAtributo)
    {
        try {
            $url = "{$this->params['base']}{$this->params['circuito_atributo']['url']}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken],
                'json' => $arrayAtributo,
            ];
            
            $this->objLogger->info("Dados da para criar Atributo", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("POST", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if($e->getCode() != 400){
                $this->objLogger->error("Erro na criação do Atributo", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            }
            
            $obj = json_decode($e->getResponse()->getBody()->getContents());
            
            if(is_array($obj) && array_key_exists(0, $obj) && is_object($obj[0]) && property_exists($obj[0], 'message')){
                $this->objLogger->error("Tentando o Update do Atributo", ['message' => $obj[0]->message, 'code' => $e->getCode()]);
                $arrayAttr = (array)$this->getByAtributo($arrayAtributo['ID__c']);
                unset($arrayAtributo['Circuito__c']);
                $arrayAttr = $this->update($arrayAtributo, $arrayAttr['Id']);
                $arrayAtributo['id'] = $arrayAttr['Id'];
                return (object)$arrayAtributo;
            }elseif(is_object($obj) && property_exists($obj, 'message')){
                $this->objLogger->error("Tentando o Update do Atributo", ['message' => $obj[0]->message, 'code' => $e->getCode()]);
                $arrayAttr = (array)$this->getByAtributo($arrayAtributo['ID__c']);
                unset($arrayAtributo['Circuito__c']);
                $arrayAttr = $this->update($arrayAtributo, $arrayAttr['Id']);
                $arrayAtributo['id'] = $arrayAttr['Id'];
                return (object)$arrayAtributo;
            }else{
                $this->objLogger->error("Erro na criação do Atributo", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw new \Exception("Invalid creation request", $e->getCode());
            }
        } catch (\Exception $e) {
            $this->objLogger->error("Erro na criação do Atributo", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
    
    public function update(array $arrayAtributo, string $id)
    {
        try {
            $url = "{$this->params['base']}{$this->params['circuito_atributo']['url']}/{$id}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken],
                'json' => $arrayAtributo,
            ];
            $this->objLogger->info("Dados da para criar Atributo", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("PATCH", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if($e->getCode() != 400){
                $this->objLogger->error("Erro na atualização do Atributo", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            }
            $this->objLogger->error("Erro na atualização do Atributo", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
            throw new \Exception("Invalid creation request", $e->getCode());
        } catch (\Exception $e) {
            $this->objLogger->error("Erro na atualização do Atributo", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
}

