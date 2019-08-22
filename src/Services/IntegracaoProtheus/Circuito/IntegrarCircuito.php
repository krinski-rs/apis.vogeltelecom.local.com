<?php
/**
 * Classe de integração.
 *
 * Classe responsável instanciar o serviço que irá criar ou atualizar circuitos no protheus.
 */

namespace App\Services\IntegracaoProtheus\Circuito;

use Monolog\Logger;
use App\Entity\Financeiro\CircuitoSalesforce;
use App\Entity\Financeiro\Contrato;
use App\Entity\Gcdb\Customers;
use App\Entity\Gcdb\Customers2users;
use App\Entity\Gcdb\CadUsers;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class IntegrarCircuito
 *
 * @package     \App\Services\IntegracaoProtheus
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
     * Variável que irá guardar a referência do serviço de log.
     *
     * @access  private
     * @var     \Monolog\Logger
     */
    private $objLogger = NULL;
    
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
     * @param   array   $params
     */
    public function __construct(Registry $objRegistry, Logger $objLogger, array $params)
    {
        $this->objEntityManager     = $objRegistry->getManager('mysql');
        $this->objLogger            = $objLogger;
        $this->params               =  $params;
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
            if($objCircuitoSalesforce->getIdCircuitoProtheus()){
                $this->objLogger->info("Update do circuito {$objCircuitoSalesforce->getContCodigoid()->getContCodigoid()}", ['id proptheus' => $objCircuitoSalesforce->getIdCircuitoProtheus()]);
//                 return $this->update($objCircuitoSalesforce);
            }else{
                $this->objLogger->info("Circuito novo {$objCircuitoSalesforce->getContCodigoid()->getContCodigoid()}");
                return $this->novo($objCircuitoSalesforce);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    /**
     * Função que cria um circuito no protheus
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
            $objAdmCidadesRepository = $this->objEntityManager->getRepository('App\Entity\Gcdb\AdmCidades');
            $objAdmLogradouroRepository = $this->objEntityManager->getRepository('App\Entity\Gcdb\AdmLogradouro');
            $objCustomersRepository = $this->objEntityManager->getRepository('App\Entity\Gcdb\Customers');
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
//                 $objAccountSalesforce = $this->objAccount->getByCnpj($objCadUser->getCnpj());
            }else{
                /*
                 * ********************************************* * 
                 * NÃO ESTÁ INTEGRANDO OS CLIENTES PESSOA FÍSICA *
                 * ********************************************* * 
                 */
//                 $objCircuitoSalesforce->setDataIntegracao(new \DateTime());
//                 $this->objEntityManager->merge($objCircuitoSalesforce);
//                 $this->objEntityManager->flush();
                return true;
            }
            print_r($this->params);
            $objSoapClient = new \SoapClient($this->params['wsdl']);
            print_r($objSoapClient->__getFunctions());
            print_r($objSoapClient->__getTypes());
            print_r($objSoapClient->__call('GETMUNICIPIOS', ['GRUPOEMPRESAS'=>99,'FILIAL'=>'Vogel RS','ESTADO'=>'RS']));
            exit("\nkkkkkkkk\n");
            return [];
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
                $objCircuitoSalesforce->setDataIntegracaoProtheus(new \DateTime());
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

