<?php
/**
 * Classe responsavel pela pesquida e inserção de Account no salesforce.
 *
 */

namespace App\Services\IntegracaoSalesforce\Cliente;

use \Monolog\Logger;
use App\Entity\Gcdb\Customers;
use App\Entity\Gcdb\CadUsers;
use App\Entity\Gcdb\Customers2users;
use App\Entity\Gcdb\CadUsersNome;
use App\Entity\Gcdb\CadUsersTelefone;

/**
 * Class Account
 *
 * @package \App\Services\IntegracaoSalesforce
 * @subpackage  Cliente
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class Account
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
     * Variável que irá quardar o id de acesso fornecido pela api de autenticação.
     * 
     * @var string
     */
    private $id = NULL;
    
    /**
     * Retorna a instância do objeto.
     * 
     * @access  public
     * @param   \Monolog\Logger $objLogger
     * @param   string  $accessToken
     * @param   string  $id
     */
    public function __construct(Logger $objLogger, array $params, string $accessToken, string $id)
    {
        $this->objLogger    = $objLogger;
        $this->params       = $params;
        $this->accessToken  = $accessToken;
        $this->id           = $id;
        $this->objClient    = new \GuzzleHttp\Client();
    }
    
    public function describe()
    {
        try {
            $url = "{$this->params['base']}{$this->params['account']['url']}/describe";
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function getByCnpj(string $cnpj)
    {
        try {
            $cnpj = $this->somenteNumeros($cnpj);
            //             $url = "{$this->params['base']}{$this->params['account']['url']}/0012E00001r3jvUQAQ";
            $url = "{$this->params['base']}{$this->params['account']['url']}/CNPJ__c/{$cnpj}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $this->objLogger->info("Dados da busca de Account", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if(!in_array($e->getResponse()->getStatusCode(), [404])){
                $this->objLogger->error("Erro na busca de Account", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw $e;
            }
            return [];
        } catch (\Exception $e) {
            $this->objLogger->error("Erro na busca de Account", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
    
    public function getById(string $id)
    {
        try {
            $url = "{$this->params['base']}{$this->params['account']['url']}/{$id}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken]
            ];
            
            $this->objLogger->info("Dados da busca de Account", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("GET", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if(!in_array($e->getResponse()->getStatusCode(), [404])){
                $this->objLogger->error("Erro na busca de Account", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw $e;
            }
            return [];
        } catch (\Exception $e) {
            $this->objLogger->error("Erro na busca de Account", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
    
    
    public function create(array $arrayAccount)
    {
        try {
            $url = "{$this->params['base']}{$this->params['account']['url']}";
            $params = [
                'headers' => ['Authorization' => $this->accessToken],
                'json' => $arrayAccount,
            ];
            
            $this->objLogger->info("Dados da para criar Account", [$params, 'url'=>$url]);
            $objGuzzleHttpResponse = $this->objClient->request("POST", $url, $params);
            return json_decode($objGuzzleHttpResponse->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if($e->getCode() != 400){
                $this->objLogger->error("Erro na criação da Account", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
                throw new \Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            }
            $this->objLogger->error("Erro na criação do circuito", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
            throw new \Exception("Invalid creation request", $e->getCode());
        }catch (\Exception $e) {
            $this->objLogger->error("Erro na criação da Account", ['message' => $e->getMessage(), 'code' => $e->getCode()]);
            throw $e;
        }
    }
    
    public function createFromCustomer(Customers $objCustomers)
    {
        try {
            
            $objCustomers2users = $objCustomers->getCustomers2users()->first();
            if(!($objCustomers2users instanceof Customers2users)){
                $this->objLogger->error("Customers2users não localizado", ['cliente'=>$objCustomers->getCustomerid()]);
                throw new \Exception('Customers2users não localizado');
            }
            
            $objCadUser = $objCustomers2users->getCadUser();
            if(!($objCadUser instanceof CadUsers)){
                $this->objLogger->error("CadUsers não localizado", ['cliente'=>$objCustomers->getCustomerid()]);
                throw new \Exception('CadUsers não localizado');
            }
            
            $nome = "";
            if($objCadUser->getTipo() == 'J'){
                $cnpj = $this->somenteNumeros($objCadUser->getCnpj());
                $arrayCadUsersNome = $objCadUser->getCadUsersNome()->filter(
                    function(CadUsersNome $objCadUsersNome){
                        return ($objCadUsersNome->getAdmTipoNome()->getId() == 5);//Razão Social
                    }
                );
                
                if(!$arrayCadUsersNome->count()){
                    $arrayCadUsersNome = $objCadUser->getCadUsersNome()->filter(
                        function(CadUsersNome $objCadUsersNome){
                            return ($objCadUsersNome->getAdmTipoNome()->getId() == 6);//Nome Fantasia
                        }
                    );
                    if(!$arrayCadUsersNome->count()){
                        $this->objLogger->error("Nome do cliente não localizado", ['cliente'=>$objCustomers->getClieCodigoid()]);
                        throw new \Exception("Nome do Customer tipo 'J' não encontrado.");
                    }
                }
                $nome = trim($arrayCadUsersNome->first()->getNome());
            }else{
                $cnpj = $this->somenteNumeros($objCadUser->getCpf());
                $arrayCadUsersNome = $objCadUser->getCadUsersNome()->filter(
                    function(CadUsersNome $objCadUsersNome){
                        return (in_array($objCadUsersNome->getAdmTipoNome()->getId(), [1, 2, 3]));//Nome pessoa física
                    }
                );
                
                if(!$arrayCadUsersNome->count()){
                    $this->objLogger->error("Nome do cliente não localizado", ['cliente'=>$objCustomers->getClieCodigoid()]);
                    throw new \Exception("Nome do Customer tipo 'F' não encontrado.");
                }
                
                $arrayCadUsersNome->first();
                while ($objCadUsersNome = $arrayCadUsersNome->current()){
                    $nome.= trim($objCadUsers->getNome()).' ';
                    $arrayCadUsersNome->next();
                }
            }
            
            $fone = "";
            $objCadUsersTelefone = $objCadUser->getCadUsersTelefone()->filter(
                function(CadUsersTelefone $objCadUsersTelefone){
                    return ($objCadUsersTelefone->getPrincipal());
                }
            );
            
            
            if(!$objCadUsersTelefone instanceof CadUsersTelefone){
                $objCadUsersTelefone = $objCadUser->getCadUsersTelefone()->first();
            }
            $fone = $this->formataFone($objCadUsersTelefone->getDdi().$objCadUsersTelefone->getDdd(). $objCadUsersTelefone->getTelefone());
            $arrayAccount = [
                'BairroCobranca__c' => trim($objCadUser->getBairro()),
                'BairroComercial__c' => trim($objCadUser->getBairro()),
                'Name' => trim($nome),
                'Type' => 'Cliente',
                'Phone' => $fone,
                'Jigsaw' => NULL,
                'OwnerId' => $this->id,
                'SicDesc' => 'Customer de teste',
                'Website' => trim($objCadUser->getSite()),
                'Industry' => 'Agriculture',
                'ParentId' => NULL,
                'BillingCity' => trim($objCadUser->getAdmCidades()->getNome()),
                'Description' => '',
                'BillingState' => trim($objCadUser->getAdmCidades()->getAdmUf()->getNome()),
                'ShippingCity' => trim($objCadUser->getAdmCidades()->getNome()),
                'AccountSource' => NULL,
                'CNPJ__c' => $cnpj,
                'BillingStreet' => trim($objCadUser->getAdmLogradouro()->getNome()).' '.trim($objCadUser->getEndereco()),
                'ShippingState' => trim($objCadUser->getAdmCidades()->getAdmUf()->getNome()),
                'BillingCountry' => trim($objCadUser->getAdmCidades()->getAdmUf()->getAdmPais()->getNome()),
                'ShippingStreet' => trim($objCadUser->getAdmLogradouro()->getNome()).' '.trim($objCadUser->getEndereco()),
                'BillingLatitude' => $objCadUser->getLatitude(),
                'ShippingCountry' => trim($objCadUser->getAdmCidades()->getAdmUf()->getAdmPais()->getNome()),
                'BillingLongitude' => $objCadUser->getLongitude(),
                'ShippingLatitude' => $objCadUser->getLatitude(),
                'BillingPostalCode' => $objCadUser->getCep(),
                'NumberOfEmployees' => '0',
                'ShippingLongitude' => $objCadUser->getLongitude(),
                'ShippingPostalCode' => $objCadUser->getCep(),
                'BillingGeocodeAccuracy' => '',
                'ShippingGeocodeAccuracy' => ''
            ];
            return $this->create($arrayAccount);
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    private function formataFone($fone)
    {
        $fone = preg_replace('/[^0-9]/', '', $fone);
        $matches = [];
        preg_match('/^([0-9]{2})([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $fone, $matches);
        if ($matches) {
            return '+'.$matches[1].' '.$matches[2].' '.$matches[3].'-'.$matches[4];
        }
        
        return $fone;
    }
    
    private function somenteNumeros($str)
    {
        return preg_replace("/[^0-9]/", "", $str);
    }
}

