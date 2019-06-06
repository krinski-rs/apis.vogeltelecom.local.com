<?php
/**
 * Classe de integração.
 *
 * Classe responsável instanciar o serviço que irá criar ou atualizar circuitos no salesforce.
 */

namespace App\Services\IntegracaoSalesforce\Circuito;

use Monolog\Logger;
use App\Entity\Financeiro\CircuitoSalesforce;
use App\Entity\Financeiro\Contrato;
use App\Entity\Gcdb\AdmCidades;
use App\Entity\Gcdb\Customers;
use App\Entity\Gcdb\Customers2users;
use App\Entity\Gcdb\CadUsers;
use Doctrine\Bundle\DoctrineBundle\Registry;
use App\Services\IntegracaoSalesforce\OAuthSalesforce;
use App\Services\IntegracaoSalesforce\Cliente\Account;
use App\Entity\Financeiro\Enderecoentrega;
use phpDocumentor\Reflection\Types\This;

/**
 * Class IntegrarCircuito
 *
 * @package     \App\Services\IntegracaoSalesforce
 * @subpackage  Circuito
 * @author      reinaldo.freitas@vogeltelecom.com
 */
class IntegrarCircuito
{
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManager = NULL;
    
    /**
     * Variável que irá guardar a referência do manager do ORM.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityManager
     */
    private $objEntityManagerGcdb = NULL;
    
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
     * Variável que irá guardar a referência do serviço de Account.
     *
     * @access  private
     * @var     Account
     */
    private $objAccount  = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de Circuit.
     *
     * @access  private
     * @var     Circuit
     */
    private $objCircuit  = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de Endereco.
     *
     * @access  private
     * @var     Endereco
     */
    private $objEndereco  = NULL;
    
    /**
     * Variável que irá guardar a referência do serviço de Cidade.
     *
     * @access  private
     * @var     Cidade
     */
    private $objCidade  = NULL;
    
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
     * @param   Registry $objRegistry
     * @param   \Monolog\Logger $objLogger
     * @param   OAuthSalesforce $objOAuthSalesforce
     * @param   array   $params
     */
    public function __construct(Registry $objRegistry, Logger $objLogger, OAuthSalesforce $objOAuthSalesforce, array $params)
    {
        $this->objEntityManager     = $objRegistry->getManager('financeiro');
        $this->objEntityManagerGcdb = $objRegistry->getManager('gcdb');
        $this->objLogger            = $objLogger;
        $this->objOAuthSalesforce   = $objOAuthSalesforce;
        $this->params               =  $params;
        
        $this->objOAuthSalesforce->login();
        
        $token = "{$this->objOAuthSalesforce->getTokenType()} {$this->objOAuthSalesforce->getAccessToken()}";
        $id = explode('/', $this->objOAuthSalesforce->getContents()->id);        
        $this->objAccount = new Account($this->objLogger, $this->params, $token, end($id));
        $this->objCircuit = new Circuit($this->objLogger, $this->params, $token);
        $this->objEndereco = new Endereco($this->objLogger, $this->params, $token);
        $this->objCidade = new Cidade($this->objLogger, $this->params, $token);
    }
    
    /**
     * Função que trata o tipo de ação que deve ser tomada novo/update
     * 
     * @param CircuitoSalesforce $objCircuitoSalesforce
     * @return number[]|NULL[]|string[]|unknown[]
     */
    public function integrar(CircuitoSalesforce $objCircuitoSalesforce)
    {
        try {
            $this->validate($objCircuitoSalesforce->getContCodigoid());
            if($objCircuitoSalesforce->getIdCircuitoSalesforce()){
                $this->objLogger->info("Update do circuito {$objCircuitoSalesforce->getContCodigoid()->getContCodigoid()}", ['id salesforce' => $objCircuitoSalesforce->getIdCircuitoSalesforce()]);
                return $this->update($objCircuitoSalesforce);
            }else{
                $this->objLogger->info("Circuito novo {$objCircuitoSalesforce->getContCodigoid()->getContCodigoid()}");
                return $this->novo($objCircuitoSalesforce);
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            throw $e;
        }
    }
    
    /**
     * Função que cria um circuito no salesforce
     * 
     * @param CircuitoSalesforce $objCircuitoSalesforce
     * @throws \Exception
     * @return number[]|NULL[]|string[]|unknown[]
     */
    protected function novo(CircuitoSalesforce $objCircuitoSalesforce)
    {
        try {
            $objContrato = $objCircuitoSalesforce->getContCodigoid();
            $objEnderecoentrega = $objContrato->getEndeentrCodigoid();
            $objAdmCidadesRepository = $this->objEntityManagerGcdb->getRepository('App\Entity\Gcdb\AdmCidades');
            $objAdmLogradouroRepository = $this->objEntityManagerGcdb->getRepository('App\Entity\Gcdb\AdmLogradouro');
            $objCustomersRepository = $this->objEntityManagerGcdb->getRepository('App\Entity\Gcdb\Customers');
            $objCustomers = $objCustomersRepository->find((integer)$objContrato->getContPaicodigoid()->getClieCodigoid());
            if(!($objCustomers instanceof Customers)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cliente não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getClieCodigoid()]);
                throw new \Exception('Cliente não localizado');
            }
            
            $objCustomers2users = $objCustomers->getCustomers2users()->first();
            if(!($objCustomers2users instanceof Customers2users)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Customers2users não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getClieCodigoid()]);
                throw new \Exception('Customers2users não localizado');
            }
            
            $objCadUser = $objCustomers2users->getCadUser();
            if(!($objCadUser instanceof CadUsers)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} CadUsers não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getClieCodigoid()]);
                throw new \Exception('CadUsers não localizado');
            }
            
            if($objCadUser->getTipo() == 'J'){
                $objAccountSalesforce = $this->objAccount->getByCnpj($objCadUser->getCnpj());
            }else{
                $objAccountSalesforce = $this->objAccount->getByCnpj($objCadUser->getCpf());
            }
            
            if(!$objAccountSalesforce || !is_object($objAccountSalesforce) || !property_exists($objAccountSalesforce, 'Id')){
                $this->objLogger->info("Circuito {$objContrato->getContCodigoid()} criando Account", ['cliente'=>$objContrato->getContPaicodigoid()->getClieCodigoid()]);
                $retorno = $this->objAccount->createFromCustomer($objCustomers);
                $objAccountSalesforce = $this->objAccount->getById($retorno->id);
                $this->objLogger->info("Circuito {$objContrato->getContCodigoid()} Account criada com sucesso", ['account'=>$objAccountSalesforce]);
            }
            
            $objCidade = $objAdmCidadesRepository->find((integer)$objEnderecoentrega->getEndeentrCidade());
            if(!($objCidade instanceof AdmCidades)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cidade não localizada", ['cliente'=>$objContrato->getContPaicodigoid()->getClieCodigoid()]);
                throw new \Exception('Cidade não localizada');
            }
            
            $objCidadeSalesforce = $this->objCidade->getByCodigoIbge($objCidade->getCodigoIbge());
            $id = explode('/', $this->objOAuthSalesforce->getContents()->id);
            $logradouro = explode('-::-', $objEnderecoentrega->getEndeentrLogradouro());
            $arrayEndereco = [];
            $tipoLogradouro = $objAdmLogradouroRepository->find((integer)$objEnderecoentrega->getAdmLogradouro());
            $arrayEndereco = [
                'Bairro__c' => trim($objEnderecoentrega->getEndeentrBairro()),
                'CEP__c' => $this->somenteNumeros($objEnderecoentrega->getEndeentrCep()),
                'Cidade__c' => $objCidadeSalesforce->Id,
                'Complemento__c' => '',
                'Conta__c' => $objAccountSalesforce->Id,
                'Name' => $objContrato->getStt(),
                'Designador__c' => $objContrato->getStt(),
                'Estado__c' => $objCidade->getAdmUf()->getSigla(),
                'EstruturaFisica__c' => 'Predio',
//                 'Geolocalizacao__c' => ['latitude'=> -30.08504430000,'longitude'=> -51.04619710000],
                'Logradouro__c' => ((count($logradouro) > 1) ? trim(iconv('UTF-8', 'ASCII//TRANSLIT', $logradouro[1])) : iconv('UTF-8', 'ASCII//TRANSLIT', $logradouro[0])),
                'Numero__c' => $objEnderecoentrega->getEndeentrNumero(),
                'TipoEndereco__c' => 'Instalação',
                'TipoLogradouro__c' => ($tipoLogradouro ? $tipoLogradouro->getId() : '160'),
            ];
            $objEndereco = $this->objEndereco->create($arrayEndereco);

            $arrayCircuit = [
                'Name' => trim($objContrato->getStt()),
                'CNPJ__c' => $objAccountSalesforce->CNPJ__c,
                'Conta__c' => $objAccountSalesforce->Id,
                'Codigo__c' => $objContrato->getContCodigoid(),
                'CircuitoId__c' => $objContrato->getEndeentrCodigoid()->getEndeentrDesignadorOld(),
                'Endereco__c' => $objEndereco->id,
                'NomeCliente__c' => $objAccountSalesforce->Name,
            ];
            $objCircuito = $this->objCircuit->create($arrayCircuit);
            $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
            $objCircuitoSalesforce->setIdCircuitoSalesforce($objCircuito->id);
            $this->objEntityManager->merge($objCircuitoSalesforce);
            $this->objEntityManager->flush();
            return $objCircuito;
        } catch (\Exception $e){
            echo $e->getMessage();
            throw $e;
        }
    }
    
    /**
     * Função que atualiza um circuito no salesforce
     * 
     * @param CircuitoSalesforce $objCircuitoSalesforce
     * @throws \Exception
     * @return number[]|NULL[]|string[]|unknown[]
     */
    protected function update(CircuitoSalesforce $objCircuitoSalesforce)
    {
        try {
            $objContrato = $objCircuitoSalesforce->getContCodigoid();
            $objEnderecoentrega = $objContrato->getEndeentrCodigoid();
            $objAdmCidadesRepository = $this->objEntityManagerGcdb->getRepository('App\Entity\Gcdb\AdmCidades');
            $objCustomersRepository = $this->objEntityManagerGcdb->getRepository('App\Entity\Gcdb\Customers');
            $objCustomers = $objCustomersRepository->find((integer)$objContrato->getContPaicodigoid()->getClieCodigoid());
            if(!($objCustomers instanceof Customers)){
                throw new \Exception('Cliente não localizado');
            }
            
            $objCustomers2users = $objCustomers->getCustomers2users()->first();
            if(!($objCustomers2users instanceof Customers2users)){
                throw new \Exception('Customers2users não localizado');
            }
            
            $objCadUser = $objCustomers2users->getCadUser();
            if(!($objCadUser instanceof CadUsers)){
                throw new \Exception('CadUsers não localizado');
            }
            
            $objCidade = $objAdmCidadesRepository->find((integer)$objEnderecoentrega->getEndeentrCidade());
            if(!($objCidade instanceof AdmCidades)){
                throw new \Exception('Cidade não localizada');
            }
            
            $rua = explode("-::-", $objEnderecoentrega->getEndeentrLogradouro());
            return [
                'id'            =>$objContrato->getContCodigoid(),
                'stt'           =>$objContrato->getStt(),
                'status'        =>$objContrato->getStatCodigoid()->getStatNome(),
                'codigo_status' =>$objContrato->getStatCodigoid()->getStatCodigoid(),
                'pais'          =>$objCidade->getAdmUf()->getAdmPais()->getSigla(),
                'uf'            =>$objCidade->getAdmUf()->getSigla(),
                'cidade'        => $this->retiraEspacoDuplo($objCidade->getNome()),
                'codigo_ibge'   => $objCidade->getCodigoIbge(),
                'bairro'        =>$objEnderecoentrega->getEndeentrBairro(),
                'logradouro'    => $this->retiraEspacoDuplo(((count($rua)==2)?$rua[1]:$objEnderecoentrega->getEndeentrLogradouro())),
                'numero'        =>$objEnderecoentrega->getEndeentrNumero(),
                'cep'           => $this->somenteNumeros($objEnderecoentrega->getEndeentrCep()),
                'complemento'   => $this->retiraEspacoDuplo($objEnderecoentrega->getEndeentrComplemento()),
                'cpf_cnpj'      => $this->somenteNumeros((($objCadUser->getTipo() == 'J') ? $objCadUser->getCnpj() : $objCadUser->getCpf()))
            ];
        } catch (\Exception $e){
            throw $e;
        }
    }
    
    private function somenteNumeros($str)
    {
        return preg_replace("/[^0-9]/", "", $str);
    }
    
    private function retiraEspacoDuplo($text)
    {
        return preg_replace('/\s+/', " ",$text);
    }
    
    private function validate(Contrato $objContrato)
    {
        try {
            if(!($objContrato->getContPaicodigoid() instanceof Contrato)){
                throw new \Exception("O código informado não pode ser de um contrato pai.");
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

