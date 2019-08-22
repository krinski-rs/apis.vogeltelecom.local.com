<?php
/**
 * Classe responsavel pela pesquida e inserção de Pedidos no salesforce.
 *
 */

namespace App\Services\IntegracaoSalesforce\Pedido;

use \Monolog\Logger;

/**
 * Class PedidoFaturamento
 *
 * @package \App\Services\IntegracaoSalesforce
 * @subpackage  Pedido
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class PedidoFaturamento
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
            $url = "{$this->params['base']}{$this->params['pedido']['url']}/{$id}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $this->objLogger->error("Busca de Pedido de Faturamento por id", [$params, 'url'=>$url]);
            
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
        } catch (\Exception $e) {
            throw $e;
        }
    }
     
    public function getByName(string $name)
    {
        try {
            $url = "{$this->params['base']}{$this->params['pedido']['url']}/Name/".$name;
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $this->objLogger->error("Busca de Pedido de Faturamento por nome", [$params, 'url'=>$url]);
            
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function describe()
    {
        try {
            $url = "{$this->params['base']}{$this->params['pedido']['url']}/describe";
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
    
    public function create(array $arrayEndereco)
    {
        try {
            $url = "{$this->params['base']}{$this->params['pedido']['url']}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken],
                'json' => $arrayEndereco,
            ];
            
            $this->objLogger->info("Dados da para criar Pedido de Faturamento", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("POST", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if($e->getCode() != 400){
                $this->objLogger->error("Erro na criação do Pedido de Faturamento", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            }
            $this->objLogger->error("Erro na criação do Pedido de Faturamento", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
            throw new \Exception("Invalid creation request", $e->getCode());
        } catch (\Exception $e) {
            $this->objLogger->error("Erro na criação do Pedido de Faturamento", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
    
    public function update(array $arrayEndereco, string $id)
    {
        try {
            $url = "{$this->params['base']}{$this->params['pedido']['url']}/{$id}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken],
                'json' => $arrayEndereco,
            ];
            $this->objLogger->info("Dados da para update Pedido de Faturamento", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("PATCH", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if($e->getCode() != 400){
                $this->objLogger->error("Erro na atualização do Pedido de Faturamento", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            }
            $this->objLogger->error("Erro na atualização do Pedido de Faturamento", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
            throw new \Exception("Invalid creation request", $e->getCode());
        } catch (\Exception $e) {
            $this->objLogger->error("Erro na atualização do Pedido de Faturamento", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
}

