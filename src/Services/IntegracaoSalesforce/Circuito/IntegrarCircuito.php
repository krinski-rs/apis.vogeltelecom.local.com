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
use App\Entity\Financeiro\Enderecoentregaatributovalor;

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
     * Variável que irá guardar a referência do serviço de Atributo.
     *
     * @access  private
     * @var     Atributo
     */
    private $objAtributo  = NULL;
    
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
        $this->objAtributo = new Atributo($this->objLogger, $this->params, $token);
    }
    
    /**
     * Função que trata o tipo de ação que deve ser tomada novo/update
     * 
     * @param CircuitoSalesforce $objCircuitoSalesforce
     * @return object
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
            throw $e;
        }
    }
    
    /**
     * Função que cria um circuito no salesforce
     * 
     * @param CircuitoSalesforce $objCircuitoSalesforce
     * @throws \Exception
     * @return object
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
                /*
                 * ********************************************* * 
                 * NÃO ESTÁ INTEGRANDO OS CLIENTES PESSOA FÍSICA *
                 * ********************************************* * 
                 */
                $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
                $this->objEntityManager->merge($objCircuitoSalesforce);
                $this->objEntityManager->flush();
                return true;
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
                'Logradouro__c' => ((count($logradouro) > 1) ? trim(iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($logradouro[1]))) : iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($logradouro[0]))),
                'Numero__c' => $objEnderecoentrega->getEndeentrNumero(),
                'TipoEndereco__c' => 'Instalação',
                'TipoLogradouro__c' => ($tipoLogradouro ? $tipoLogradouro->getId() : '160'),
            ];
            $objEndereco = $this->objEndereco->create($arrayEndereco);

            $arrayCircuit = [
                'Name' => trim($objContrato->getStt()),
                'CNPJ__c' => $objAccountSalesforce->CNPJ__c,
                'Conta__c' => $objAccountSalesforce->Id,
                'Codigo__c' => $objContrato->getStt(),
                'CircuitoId__c' => $objContrato->getContCodigoid(),
                'Endereco__c' => $objEndereco->id,
                'NomeCliente__c' => $objAccountSalesforce->Name,
                'PontaB__c' => $objEndereco->id
            ];
            $objCircuito = $this->objCircuit->create($arrayCircuit);
            
            $arrayEnderecoentregaatributovalor = $objContrato->getEnderecoentregaatributovalor();
            if($arrayEnderecoentregaatributovalor->count()){
                $arrayEnderecoentregaatributovalor->first();
                while ($objEnderecoentregaatributovalor = $arrayEnderecoentregaatributovalor->current()){
                    if($objEnderecoentregaatributovalor instanceof Enderecoentregaatributovalor){
                        $name = $objEnderecoentregaatributovalor->getAtrivaloCodigoid()->getAtriCodigoid()->getAtriNome();
                        $valor = $objEnderecoentregaatributovalor->getAtrivaloCodigoid()->getAtrivaloValor();
                        $valor.= " {$objEnderecoentregaatributovalor->getEndeentratrivaloValor()}";
                        $arrayAtributo = [
                            'Name' => $name,
                            'Circuito__c' => $objCircuito->id,
                            'ID__c' => $objEnderecoentregaatributovalor->getEndeentratrivaloCodigoid(),
                            'Valor__c' => iconv('UTF-8', 'ASCII//TRANSLIT', trim(substr($valor, 0, 255)))
                        ];
                        if(count($arrayAtributo)){
                            $this->objAtributo->create($arrayAtributo);
                        }
                    }
                    $arrayEnderecoentregaatributovalor->next();
                }
            }
            
            $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
            $objCircuitoSalesforce->setIdCircuitoSalesforce($objCircuito->id);
            $objContrato = $objCircuitoSalesforce->getContCodigoid();
            $objContrato->setSalesforceId($objCircuito->id);
            $this->objEntityManager->merge($objContrato);
            $this->objEntityManager->merge($objCircuitoSalesforce);
            $this->objEntityManager->flush();
            return $objCircuito;
        } catch (\Exception $e){
            if(isset($objCircuito) && is_object($objCircuito) &&property_exists($objCircuito, 'id')){
                $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
                $objCircuitoSalesforce->setIdCircuitoSalesforce($objCircuito->id);
                $objContrato = $objCircuitoSalesforce->getContCodigoid();
                $objContrato->setSalesforceId($objCircuito->id);
                $this->objEntityManager->merge($objContrato);
                $this->objEntityManager->merge($objCircuitoSalesforce);
                $this->objEntityManager->flush();
            }else{
                $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
                $this->objEntityManager->merge($objCircuitoSalesforce);
                $this->objEntityManager->flush();
            }
            throw $e;
        }
    }
    
    /**
     * Função que atualiza um circuito no salesforce
     * 
     * @param CircuitoSalesforce $objCircuitoSalesforce
     * @throws \Exception
     * @return object
     */
    protected function update(CircuitoSalesforce $objCircuitoSalesforce)
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
                /*
                 * ********************************************* *
                 * NÃO ESTÁ INTEGRANDO OS CLIENTES PESSOA FÍSICA *
                 * ********************************************* *
                 */
                $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
                $this->objEntityManager->merge($objCircuitoSalesforce);
                $this->objEntityManager->flush();
                return true;
            }
            
            if(!$objAccountSalesforce || !is_object($objAccountSalesforce) || !property_exists($objAccountSalesforce, 'Id')){
                $this->objLogger->info("Circuito {$objContrato->getContCodigoid()} Account NÃO LOCALIZADO", ['cliente'=>$objContrato->getContPaicodigoid()->getClieCodigoid()]);
                throw new \Exception('Account NÃO LOCALIZADO');
            }
            
            $objCidade = $objAdmCidadesRepository->find((integer)$objEnderecoentrega->getEndeentrCidade());
            if(!($objCidade instanceof AdmCidades)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cidade não localizada", ['cliente'=>$objContrato->getContPaicodigoid()->getClieCodigoid()]);
                throw new \Exception('Cidade não localizada');
            }
            
            $objCidadeSalesforce = $this->objCidade->getByCodigoIbge($objCidade->getCodigoIbge());
            $id = explode('/', $this->objOAuthSalesforce->getContents()->id);
            $logradouro = explode('-::-', $objEnderecoentrega->getEndeentrLogradouro());
            $arrayEndereco = (array)$this->objEndereco->getByDesignador($objContrato->getStt());
            $tipoLogradouro = $objAdmLogradouroRepository->find((integer)$objEnderecoentrega->getAdmLogradouro());
            $arrayEndereco['Bairro__c'] = trim($objEnderecoentrega->getEndeentrBairro());
            $arrayEndereco['CEP__c'] = $this->somenteNumeros($objEnderecoentrega->getEndeentrCep());
            $arrayEndereco['Cidade__c'] = $objCidadeSalesforce->Id;
            $arrayEndereco['Complemento__c'] = '';
            $arrayEndereco['Conta__c'] = $objAccountSalesforce->Id;
            $arrayEndereco['Name'] = $objContrato->getStt();
            $arrayEndereco['Designador__c'] = $objContrato->getStt();
            $arrayEndereco['Estado__c'] = $objCidade->getAdmUf()->getSigla();
            $arrayEndereco['EstruturaFisica__c'] = 'Predio';
            $arrayEndereco['Logradouro__c'] = ((count($logradouro) > 1) ? trim(iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($logradouro[1]))) : iconv('UTF-8', 'ASCII//TRANSLIT', $this->strReplaceLOgradouro($logradouro[0])));
            $arrayEndereco['Numero__c'] = $objEnderecoentrega->getEndeentrNumero();
            $arrayEndereco['TipoEndereco__c'] = 'Instalação';
            $arrayEndereco['TipoLogradouro__c'] = ($tipoLogradouro ? $tipoLogradouro->getId() : '160');
            $idEndereco = $arrayEndereco['Id'];
            unset($arrayEndereco['Id'], $arrayEndereco['LastModifiedDate'], $arrayEndereco['LastReferencedDate'], $arrayEndereco['Geolocalizacao__c']);
            unset($arrayEndereco['CreatedById'], $arrayEndereco['IsDeleted'], $arrayEndereco['LastViewedDate'], $arrayEndereco['SystemModstamp']);
            unset($arrayEndereco['CreatedDate'], $arrayEndereco['LastModifiedById']);
//             print_r($id);
//             print_r($arrayEndereco);
            
            $objEndereco = $this->objEndereco->update($arrayEndereco, $idEndereco);
            
            $arrayCircuit = (array)$this->objCircuit->getByCircuito($objContrato->getContCodigoid());
            $arrayCircuit['Name'] = trim($objContrato->getStt());
            $arrayCircuit['CNPJ__c'] = $objAccountSalesforce->CNPJ__c;
            $arrayCircuit['Codigo__c'] = $objContrato->getStt();
            $arrayCircuit['CircuitoId__c'] = $objContrato->getContCodigoid();
            $arrayCircuit['Endereco__c'] = $idEndereco;
            $arrayCircuit['NomeCliente__c'] = $objAccountSalesforce->Name;
            $arrayCircuit['PontaB__c'] = $idEndereco;
            $idCircuit = $arrayCircuit['Id'];
            unset($arrayCircuit['Id'], $arrayCircuit['LastModifiedDate'], $arrayCircuit['LastReferencedDate'], $arrayCircuit['EnderecoPontaA__c']);
            unset($arrayCircuit['CreatedById'], $arrayCircuit['Identificador__c'], $arrayCircuit['IsDeleted'], $arrayCircuit['EnderecoCompleto__c']);
            unset($arrayCircuit['Acessar__c'], $arrayCircuit['LastViewedDate'], $arrayCircuit['EnderecoPontaB__c'], $arrayCircuit['SystemModstamp']);
            unset($arrayCircuit['CreatedDate'], $arrayCircuit['LastActivityDate'], $arrayCircuit['LastModifiedById'], $arrayCircuit['Conta__c']);
            $objCircuito = $this->objCircuit->update($arrayCircuit, $idCircuit);
            
            $arrayEnderecoentregaatributovalor = $objContrato->getEnderecoentregaatributovalor();
            if($arrayEnderecoentregaatributovalor->count()){
                $arrayEnderecoentregaatributovalor->first();
                while ($objEnderecoentregaatributovalor = $arrayEnderecoentregaatributovalor->current()){
                    if($objEnderecoentregaatributovalor instanceof Enderecoentregaatributovalor){
                        $name = $objEnderecoentregaatributovalor->getAtrivaloCodigoid()->getAtriCodigoid()->getAtriNome();
                        $valor = $objEnderecoentregaatributovalor->getAtrivaloCodigoid()->getAtrivaloValor();
                        $valor.= " {$objEnderecoentregaatributovalor->getEndeentratrivaloValor()}";
                        $arrayAtributo = (array)$this->objAtributo->getByAtributo($objEnderecoentregaatributovalor->getEndeentratrivaloCodigoid());
                        if(count($arrayAtributo)){
                            $idAtributo = $arrayAtributo['Id'];
                            $arrayAtributo['Name'] = $name;
                            $arrayAtributo['Valor__c'] = iconv('UTF-8', 'ASCII//TRANSLIT', trim(substr($valor, 0, 255)));
                            unset($arrayAtributo['Id'], $arrayAtributo['LastModifiedDate'], $arrayAtributo['IsDeleted'], $arrayAtributo['SystemModstamp']);
                            unset($arrayAtributo['Id'], $arrayAtributo['CreatedById'], $arrayAtributo['CreatedDate'], $arrayAtributo['LastActivityDate']);
                            unset($arrayAtributo['LastModifiedById']);
                            $this->objAtributo->update($arrayAtributo, $idAtributo);
                        }
                    }
                    $arrayEnderecoentregaatributovalor->next();
                }
            }
            
            $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
            $objCircuitoSalesforce->setIdCircuitoSalesforce($idCircuit);
            $objContrato = $objCircuitoSalesforce->getContCodigoid();
            $objContrato->setSalesforceId($idCircuit);
            $this->objEntityManager->merge($objContrato);
            $this->objEntityManager->merge($objCircuitoSalesforce);
            $this->objEntityManager->flush();
            return $objCircuito;
        } catch (\Exception $e){
            if(isset($idCircuit)){
                $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
                $objCircuitoSalesforce->setIdCircuitoSalesforce($idCircuit);
                $objContrato = $objCircuitoSalesforce->getContCodigoid();
                $objContrato->setSalesforceId($idCircuit);
                $this->objEntityManager->merge($objContrato);
                $this->objEntityManager->merge($objCircuitoSalesforce);
                $this->objEntityManager->flush();
            }else{
                $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
                $this->objEntityManager->merge($objCircuitoSalesforce);
                $this->objEntityManager->flush();
            }
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
    
    private function strReplaceLOgradouro($str)
    {
        $arraReplace = [
            '-' => '', ',' => '', '.' => '', '/' => '', '°' => '', '\'' => '', '?' => '', '(' => '', ')' => '',
            '+' => '', ':' => ''
        ];
        return str_replace(array_keys($arraReplace), array_values($arraReplace), $str);
    }
}

