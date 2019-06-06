<?php
/**
 * Classe responsavel pela pesquida e inserção de Endereco no salesforce.
 *
 */

namespace App\Services\IntegracaoSalesforce\Circuito;

use \Monolog\Logger;

/**
 * Class Endereco
 *
 * @package \App\Services\IntegracaoSalesforce
 * @subpackage  Circuito
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Endereco
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
    
    public function create(array $arrayEndereco)
    {
        try {
            $url = "{$this->params['base']}{$this->params['endereco']['url']}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken],
                'json' => $arrayEndereco,
            ];
            
            $this->objLogger->info("Dados da para criar Endereço", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("POST", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if($e->getCode() != 400){
                $this->objLogger->error("Erro na criação da Account", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            }
            $this->objLogger->error("Erro na criação do endereço", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
            throw new \Exception("Invalid creation request", $e->getCode());
        } catch (\Exception $e) {
            $this->objLogger->error("Erro na criação do endereço", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
}

