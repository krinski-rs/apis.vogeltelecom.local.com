<?php
/**
 * Classe de autenticação
 *
 * Classe responsável pelas autenticações com o salesforce.
 */

namespace App\Services\IntegracaoSalesforce;

use \Monolog\Logger;

/**
 * Class IntegracaoSalesforce
 *
 * @package \App\Services\IntegracaoSalesforce
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class OAuthSalesforce
{
    /**
     * Variável que irá guardar a referência do serviço de log.
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
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \Monolog\Logger   $objLogger
     */
    public function __construct(Logger $objLogger, array $params)
    {
        $this->objLogger    = $objLogger;
        $this->params       = $params;
        $this->objClient    = new \GuzzleHttp\Client();
    }
    
    private function authorize()
    {
//         $url = $this->params['oauth']['base'].'?grant_type=authorization_code&cliente_id=3MVG9ZF4bs_.MKujslTjSM6G2CBZdrW1tMy_FVUjuSzijMIB7Iv7mcIa_CLaLE6z5uHqph2kgkFDDp88YEqJQ&client_secret=47A84CEDBB6F848A425F75579F453CFE8B70CB553D672D9AF89AC2428DB14FAF';
        $params = [
            'form_params' => $this->params['oauth']['auth'],
            'headers' => ['Accept'=>'application/json']
        ];
        
        $objGuzzleHttpResponse = $this->objClient->request("POST", $this->params['oauth']['token'], $params);
        \Doctrine\Common\Util\Debug::dump($this->params['oauth']['url_base'], 2);
        \Doctrine\Common\Util\Debug::dump($params, 2);
        if($objGuzzleHttpResponse instanceof \GuzzleHttp\Psr7\Response){
            \Doctrine\Common\Util\Debug::dump($objGuzzleHttpResponse->getStatusCode(), 2);
            \Doctrine\Common\Util\Debug::dump($objGuzzleHttpResponse->getBody()->getContents(), 2);
            \Doctrine\Common\Util\Debug::dump($objGuzzleHttpResponse->getBody(), 2);
        }
//         \Doctrine\Common\Util\Debug::dump($objGuzzleHttpResponse, 2);
    }
    
    public function login()
    {
        $this->authorize();
        exit("\nFIM\n");
    }
}

