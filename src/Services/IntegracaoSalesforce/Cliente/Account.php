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
use App\Services\IntegracaoSalesforce\Circuito\Cidade;
use App\Services\IntegracaoSalesforce\Circuito\Circuit;

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
     * Variável que irá guardar a referência do serviço de Cidade.
     *
     * @access  private
     * @var     Cidade
     */
    private $objCidade  = NULL;
    
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
    
    private $arraySegmento = [
        'Corporativo' => 'Corporativo',
        'Fornecedor' => 'Corporativo',
        'Canal' => 'Corporativo',
        'Governo' => 'Governo',
        'ISP' => 'ISP',
        'Key Accounts' => 'KAM',
        'Operadora' => 'Operadoras'
    ];
    
    private static $arrayPrioridade = [
        'Carrier1' => 'Vip',
        'Vogel 1000' => 'Vip',
        'VIP1' => 'Vip',
        'VIP2' => 'Vip',
        'VIP3' => 'Vip',
        'Vip' => 'Vip',
        'Top' => 'Top',
        'Premium' => 'Premium',
        'Ouro' => 'Ouro',
        'ISP1' => 'Vip',
    ];
    
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
        $this->objCidade = new Cidade($this->objLogger, $this->params, $accessToken);
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
            $this->objLogger->error("Erro na criação da Account", ['message' => $e->getResponse()->getBody()->getContents(), 'code' => $e->getCode()]);
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
            $nomeFantasia = "";
            if($objCadUser->getTipo() == 'J'){
                $cnpj = str_pad($this->somenteNumeros($objCadUser->getCnpj()), 14, '0', STR_PAD_LEFT);
                $arrayCadUsersNome = $objCadUser->getCadUsersNome()->filter(
                    function(CadUsersNome $objCadUsersNome){
                        return ($objCadUsersNome->getAdmTipoNome()->getId() == 5);//Razão Social
                    }
                );
                
                $arrayCadUsersNomeFantasia = $objCadUser->getCadUsersNome()->filter(
                    function(CadUsersNome $objCadUsersNome){
                        return ($objCadUsersNome->getAdmTipoNome()->getId() == 6);//Nome Fantasia
                    }
                );
                
                if($arrayCadUsersNomeFantasia->count()){
                    $nomeFantasia = trim($arrayCadUsersNomeFantasia->first()->getNome());
                }
               
                if(!$arrayCadUsersNome->count()){
                    if(!$arrayCadUsersNomeFantasia->count()){
                        $this->objLogger->error("Nome do cliente não localizado", ['cliente'=>$objCustomers->getClieCodigoid()]);
                        throw new \Exception("Nome do Customer tipo 'J' não encontrado.");
                    }
                    $nome = trim($arrayCadUsersNomeFantasia->first()->getNome());
                }
                $nome = trim($arrayCadUsersNome->first()->getNome());
            }else{
                $cnpj = str_pad($this->somenteNumeros($objCadUser->getCpf()), 11, '0', STR_PAD_LEFT);
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
                    $nome.= trim($objCadUsersNome->getNome()).' ';
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
            
            $rua = trim($objCadUser->getAdmLogradouro()->getNome()).' '.trim($objCadUser->getEndereco());
            $rua = iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($rua));
            $bairro = trim($objCadUser->getBairro());
            $cidade = trim($objCadUser->getAdmCidades()->getNome());
            $objAdmUf = $objCadUser->getAdmCidades()->getAdmUf();
            $estado = trim($objAdmUf->getNome());
            
            $objCidadeSalesforce = $this->objCidade->getByCodigoIbge($objCadUser->getAdmCidades()->getCodigoIbge());
            
            
            $fone = $this->formataFone($objCadUsersTelefone->getDdi().$objCadUsersTelefone->getDdd(). $objCadUsersTelefone->getTelefone());
            $nivel = trim($objCustomers->getPrioridades()->first()->getNivel());
            $arrayAccount = [
                'BairroCobranca__c' => $bairro,
                'BairroComercial__c' => $bairro,
//                 'Carga__c' => true,
                'CEPCobranca__c' => $objCadUser->getCep(),
                'CEPComercial__c' => $objCadUser->getCep(),
                'CidadeCobranca__c' => $objCidadeSalesforce->Id,
                'CidadeComercial__c' => $objCidadeSalesforce->Id,
                'ClassificacaoCliente__c' => $this->arrayPrioridade[$nivel],
                'Name' => trim($nome),
                'CNPJ__c' => $cnpj,
                'ComplementoCobranca__c' => '',
                'ComplementoComercial__c' => '',
                'Description' => '',
                'EstadoCobranca__c' => $objAdmUf->getSigla(),
                'EstadoComercial__c' => $objAdmUf->getSigla(),
                'LogradouroCobranca__c' => iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($objCadUser->getEndereco())),
                'LogradouroComercial__c' => iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($objCadUser->getEndereco())),
                'NomeFantasia__c' => $nomeFantasia,
                'NumeroCobranca__c' => $objCadUser->getNumero(),
                'NumeroComercial__c' => $objCadUser->getNumero(),
                'Segmento__c' => ($objCadUser->getSegmento() ? $this->arraySegmento[$objCadUser->getSegmento()->getDescricao()] : 'Corporativo'),
                'Website' => trim($objCadUser->getSite()),
                'Phone' => $fone,
                'Type' => 'Cliente',
                'TipoLogradouroCobranca__c' => $objCadUser->getAdmLogradouro()->getId(),
                'TipoLogradouroComercial__c' => $objCadUser->getAdmLogradouro()->getId(),
                'Jigsaw' => NULL,
                'OwnerId' => $this->id,
                'ParentId' => NULL,
                'BillingCity' => $cidade,
                'BillingState' => $estado,
                'ShippingCity' => $cidade,
                'AccountSource' => NULL,
                'BillingStreet' => $rua,
                'ShippingState' => $estado,
                'BillingCountry' => trim($objCadUser->getAdmCidades()->getAdmUf()->getAdmPais()->getNome()),
                'ShippingStreet' => $rua,
                'BillingLatitude' => $objCadUser->getLatitude(),
                'ShippingCountry' => trim($objCadUser->getAdmCidades()->getAdmUf()->getAdmPais()->getNome()),
                'BillingLongitude' => $objCadUser->getLongitude(),
                'ShippingLatitude' => $objCadUser->getLatitude(),
                'BillingPostalCode' => $objCadUser->getCep(),
                'NumberOfEmployees' => '0',
                'ShippingLongitude' => $objCadUser->getLongitude(),
                'ShippingPostalCode' => $objCadUser->getCep(),
                'BillingGeocodeAccuracy' => '',
                'ShippingGeocodeAccuracy' => '',
                'ClassificacaoCliente__c' => Circuit::$arrayEmAtivacao[$objCustomers->getPrioridades()->first()->getNivel()]
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
    
    private function strReplaceLOgradouro($str)
    {
        $arraReplace = [
            '-' => '', ',' => '', '.' => '', '/' => '', '°' => '', '\'' => '', '?' => '', '(' => '', ')' => '',
            '+' => '', ':' => ''
        ];
        return str_replace(array_keys($arraReplace), array_values($arraReplace), $str);
    }
    
    private function somenteNumeros($str)
    {
        return preg_replace("/[^0-9]/", "", $str);
    }
}

