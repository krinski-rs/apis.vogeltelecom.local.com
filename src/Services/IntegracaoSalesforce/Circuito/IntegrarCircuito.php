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
use App\Entity\Gcdb\Circuito as CircuitoGcdb;
use App\Entity\Gcdb\CircuitoPop;
use App\Entity\Luma\Pop;
use App\Entity\Financeiro\Contratoservico;
use App\Entity\Luma\Poplocalizacao;
use App\Entity\Gcdb\AdmUf;
use App\Entity\Luma\Poprelacaolocalizacao;

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
     * Repository para a busca de cidades no database GCDB.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityRepository
     */
    private $objAdmCidadesRepository = NULL;
    
    /**
     * Repository para a busca de estados no database GCDB.
     *
     * @access  private
     * @var     \Doctrine\ORM\EntityRepository
     */
    private $objAdmUfRepository = NULL;
    
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
     * Variável que irá guardar a referência do serviço de Produto.
     *
     * @access  private
     * @var     Produto
     */
    private $objProduto  = NULL;
    
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
        $this->objEntityManager         = $objRegistry->getManager('mysql');
        $this->objAdmCidadesRepository  = $this->objEntityManager->getRepository('AppEntity:Gcdb\AdmCidades');
        $this->objAdmUfRepository       = $this->objEntityManager->getRepository('AppEntity:Gcdb\AdmUf');
        $this->objLogger                = $objLogger;
        $this->objOAuthSalesforce       = $objOAuthSalesforce;
        $this->params                   =  $params;
        
        $this->objOAuthSalesforce->login();
        
        $token = "{$this->objOAuthSalesforce->getTokenType()} {$this->objOAuthSalesforce->getAccessToken()}";
        $id = explode('/', $this->objOAuthSalesforce->getContents()->id);        
        $this->objAccount = new Account($this->objLogger, $this->params, $token, end($id));
        $this->objCircuit = new Circuit($this->objLogger, $this->params, $token);
        $this->objEndereco = new Endereco($this->objLogger, $this->params, $token);
        $this->objCidade = new Cidade($this->objLogger, $this->params, $token);
        $this->objAtributo = new Atributo($this->objLogger, $this->params, $token);
        $this->objProduto = new Produto($this->objLogger, $this->params, $token);
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
            $objCustomers = $objContrato->getContPaicodigoid()->getCustomers();
            if(!($objCustomers instanceof Customers)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cliente não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('Cliente não localizado');
            }
            
            $objCustomers2users = $objCustomers->getCustomers2users()->first();
            if(!($objCustomers2users instanceof Customers2users)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Customers2users não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('Customers2users não localizado');
            }
            
            $objCadUser = $objCustomers2users->getCadUser();
            if(!($objCadUser instanceof CadUsers)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} CadUsers não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('CadUsers não localizado');
            }
            
            if($objCadUser->getTipo() == 'J'){
                $objAccountSalesforce = $this->objAccount->getByCnpj(str_pad($objCadUser->getCnpj(), 14, '0', STR_PAD_LEFT));
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
                $this->objLogger->info("Circuito {$objContrato->getContCodigoid()} criando Account", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                $retorno = $this->objAccount->createFromCustomer($objCustomers);
                $objAccountSalesforce = $this->objAccount->getById($retorno->id);
                $this->objLogger->info("Circuito {$objContrato->getContCodigoid()} Account criada com sucesso", ['account'=>$objAccountSalesforce]);
            }
            
            $objCidade = $objEnderecoentrega->getAdmCidades();
            if(!($objCidade instanceof AdmCidades)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cidade não localizada", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('Cidade não localizada');
            }
            
            $objCidadeSalesforce = $this->objCidade->getByCodigoIbge($objCidade->getCodigoIbge());
            $id = explode('/', $this->objOAuthSalesforce->getContents()->id);
            $logradouro = explode('-::-', $objEnderecoentrega->getEndeentrLogradouro());
            
            $arrayEndereco = [];
            $tipoLogradouro = $objEnderecoentrega->getAdmLogradouro();
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
            $objEnderecoPontaB = NULL;
            if($objEnderecoentrega->getCircuitos()->count()){
                $objCircuitoGcdb = $objEnderecoentrega->getCircuitos()->first();
                
                if($objCircuitoGcdb instanceof CircuitoGcdb){
                    
                    if($objCircuitoGcdb->getCircuitoPop()->count()){
                        $objCircuitoPop = $objCircuitoGcdb->getCircuitoPop()->filter(
                            function(CircuitoPop $objCircuitoPop){
                                return $objCircuitoPop->getAtivo();
                            }
                        )->first();
                        if($objCircuitoPop instanceof CircuitoPop){
                            $objPop = $objCircuitoPop->getPop();
                            
                            if($objPop instanceof Pop){                                
                                $objEnderecoPontaB = $this->objEndereco->getByName(trim("POP - ".$objPop->getNome()));
                            }
                        }
                    }
                }
            }
            $velocidade = NULL;
            $objContratoservico = $objContrato->getContratoservico()->first();
            $objProdutoSalesforce = NULL;
            if($objContratoservico instanceof Contratoservico){
                $produto = $objContratoservico->getServcapaCodigoid()->getServCodigoid()->getServNome();
                $objProdutoSalesforce = $this->objProduto->getByName($produto);
                $medida = $objContratoservico->getServcapaCodigoid()->getMediCodigoid()->getMediNome();
                $velocidade = $objContratoservico->getServcapaCodigoid()->getCapaCodigoid()->getCapaCapacidade();
                switch($medida){
                    case 'Megabit':
                        $medida = "Mbps";
                        break;
                    case 'Kilobit':
                        $medida = "Kbps";
                        break;
                    case 'bit':
                        $velocidade = ($velocidade/1024);
                        $medida = "Kbps";
                        break;
                    case 'Gigabit':
                        $medida = "Gbps";
                        break;
                    case 'Megabyte':
                        $medida = "Mbps";
                        break;
                    case 'Gigabyte':
                        $medida = "Gbpps";
                        break;
                    case 'byte':
                        $velocidade = ($velocidade/1024);
                        $medida = "Kbps";
                        break;
                    default:
                        $velocidade = "";
                        $medida = "";
                        break;
                }
            }
            
            $status = NULL;
            if(array_key_exists($objContrato->getStatCodigoid()->getStatCodigoid(), Circuit::$arrayEmAtivacao)){
                $status = Circuit::$arrayEmAtivacao[$objContrato->getStatCodigoid()->getStatCodigoid()];
            }else{
                $status = $objContrato->getStatCodigoid()->getStatNome();
            }
                        
            $arrayCircuit = [
                'Name' => trim($objContrato->getStt()),
                'CNPJ__c' => $objAccountSalesforce->CNPJ__c,
                'Conta__c' => $objAccountSalesforce->Id,
                'Codigo__c' => $objContrato->getStt(),
                'CircuitoId__c' => $objContrato->getContCodigoid(),
                'Endereco__c' => $objEndereco->id,
                'NomeCliente__c' => $objAccountSalesforce->Name,
                'PontaB__c' => ($objEnderecoPontaB ? $objEnderecoPontaB->Id : $objEnderecoPontaB),
                'ProdutoContratado__c' => $objProdutoSalesforce->Id,
                'Status__c' => $status,
                'Velocidade__c' => $velocidade,
                'Un_Medida_Velocidade__c' => $medida
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
            $objCustomers = $objContrato->getContPaicodigoid()->getCustomers();
            if(!($objCustomers instanceof Customers)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cliente não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('Cliente não localizado');
            }
            
            $objCustomers2users = $objCustomers->getCustomers2users()->first();
            if(!($objCustomers2users instanceof Customers2users)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Customers2users não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('Customers2users não localizado');
            }
            
            $objCadUser = $objCustomers2users->getCadUser();
            if(!($objCadUser instanceof CadUsers)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} CadUsers não localizado", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('CadUsers não localizado');
            }
            
            if($objCadUser->getTipo() == 'J'){
                $objAccountSalesforce = $this->objAccount->getByCnpj(str_pad($objCadUser->getCnpj(), 14, '0', STR_PAD_LEFT));
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
                $this->objLogger->info("Circuito {$objContrato->getContCodigoid()} Account NÃO LOCALIZADO", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('Account NÃO LOCALIZADO');
            }
            
            $objCidade = $objEnderecoentrega->getAdmCidades();
            if(!($objCidade instanceof AdmCidades)){
                $this->objLogger->error("Circuito {$objContrato->getContCodigoid()} Cidade não localizada", ['cliente'=>$objContrato->getContPaicodigoid()->getCustomers()->getCustomerid()]);
                throw new \Exception('Cidade não localizada');
            }
            
            $objCidadeSalesforce = $this->objCidade->getByCodigoIbge($objCidade->getCodigoIbge());
            $id = explode('/', $this->objOAuthSalesforce->getContents()->id);
            $logradouro = explode('-::-', $objEnderecoentrega->getEndeentrLogradouro());
            $arrayEndereco = (array)$this->objEndereco->getByDesignador($objContrato->getStt());
            $tipoLogradouro = $objEnderecoentrega->getAdmLogradouro();
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
            $objEnderecoPontaB = NULL;
            if($objEnderecoentrega->getCircuitos()->count()){
                $objCircuitoGcdb = $objEnderecoentrega->getCircuitos()->first();
                
                if($objCircuitoGcdb instanceof CircuitoGcdb){
                    
                    if($objCircuitoGcdb->getCircuitoPop()->count()){
                        $objCircuitoPop = $objCircuitoGcdb->getCircuitoPop()->filter(
                            function(CircuitoPop $objCircuitoPop){
                                return $objCircuitoPop->getAtivo();
                            }
                            )->first();
                            $objEnderecoPontaB = NULL;
                            if($objCircuitoPop instanceof CircuitoPop){
                                $objPop = $objCircuitoPop->getPop();
                                
                                if($objPop instanceof Pop){
                                    $objEnderecoPontaB = $this->objEndereco->getByName(trim("POP - ".$objPop->getNome()));
                                }
                            }
                    }
                }
            }
            
            $velocidade = NULL;
            $objContratoservico = $objContrato->getContratoservico()->first();
            $objProdutoSalesforce = NULL;
            if($objContratoservico instanceof Contratoservico){
                $produto = $objContratoservico->getServcapaCodigoid()->getServCodigoid()->getServNome();
                $objProdutoSalesforce = $this->objProduto->getByName($produto);
                $medida = $objContratoservico->getServcapaCodigoid()->getMediCodigoid()->getMediNome();
                $velocidade = $objContratoservico->getServcapaCodigoid()->getCapaCodigoid()->getCapaCapacidade();
                switch($medida){
                    case 'Megabit':
                        $medida = "Mbps";
                        break;
                    case 'Kilobit':
                        $medida = "Kbps";
                        break;
                    case 'bit':
                        $velocidade = ($velocidade/1024);
                        $medida = "Kbps";
                        break;
                    case 'Gigabit':
                        $medida = "Gbps";
                        break;
                    case 'Megabyte':
                        $medida = "Mbps";
                        break;
                    case 'Gigabyte':
                        $medida = "Gbpps";
                        break;
                    case 'byte':
                        $velocidade = ($velocidade/1024);
                        $medida = "Kbps";
                        break;
                    default:
                        $velocidade = "";
                        $medida = "";
                        break;
                }
            }
            
            $status = NULL;
            if(array_key_exists($objContrato->getStatCodigoid()->getStatCodigoid(), Circuit::$arrayEmAtivacao)){
                $status = Circuit::$arrayEmAtivacao[$objContrato->getStatCodigoid()->getStatCodigoid()];
            }else{
                $status = $objContrato->getStatCodigoid()->getStatNome();
            }

            $arrayCircuit = (array)$this->objCircuit->getByCircuito($objContrato->getContCodigoid());
            $arrayCircuit['Name'] = trim($objContrato->getStt());
            $arrayCircuit['CNPJ__c'] = $objAccountSalesforce->CNPJ__c;
            $arrayCircuit['Codigo__c'] = $objContrato->getStt();
            $arrayCircuit['CircuitoId__c'] = $objContrato->getContCodigoid();
            $arrayCircuit['Endereco__c'] = $idEndereco;
            $arrayCircuit['NomeCliente__c'] = $objAccountSalesforce->Name;
            $arrayCircuit['PontaB__c'] = $objEnderecoPontaB->Id;
            $arrayCircuit['Status__c'] = $status;
            $arrayCircuit['Velocidade__c'] = $velocidade;
            $arrayCircuit['Un_Medida_Velocidade__c'] = $medida;
            
            $idCircuit = $arrayCircuit['Id'];
            unset($arrayCircuit['Id'], $arrayCircuit['LastModifiedDate'], $arrayCircuit['LastReferencedDate'], $arrayCircuit['EnderecoPontaA__c']);
            unset($arrayCircuit['CreatedById'], $arrayCircuit['Identificador__c'], $arrayCircuit['IsDeleted'], $arrayCircuit['EnderecoCompleto__c']);
            unset($arrayCircuit['Acessar__c'], $arrayCircuit['LastViewedDate'], $arrayCircuit['EnderecoPontaB__c'], $arrayCircuit['SystemModstamp']);
            unset($arrayCircuit['CreatedDate'], $arrayCircuit['LastActivityDate'], $arrayCircuit['LastModifiedById'], $arrayCircuit['Conta__c']);
            unset($arrayCircuit['cidade_pb__c'], $arrayCircuit['cidade_pa__c'], $arrayCircuit['Regional_Atendimento__c'], $arrayCircuit['estado_pa__c']);
            unset($arrayCircuit['Editar_Circuitos__c'], $arrayCircuit['estado_pb__c'], $arrayCircuit['Peso_do_Circuito__c'], $arrayCircuit['Velocidade_Mbps__c']);
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

