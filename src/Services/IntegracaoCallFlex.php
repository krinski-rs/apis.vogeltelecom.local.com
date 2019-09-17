<?php
/**
 * Classe de Integração
 *
 * Classe responsável pelas integrações com o callflex.
 */

namespace App\Services;

use Monolog\Logger;
use App\Services\IntegracaoSalesforce\DBAL\Cases;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Services\IntegracaoCallFlex\FtpCallFlex;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Class IntegracaoCallFlex
 *
 * @package \App\Services
 * @author  reinaldo.freitas@vogeltelecom.com
 */
class IntegracaoCallFlex
{    
    /**
     * Variável que irá guardar a referência do serviço de consulta de case.
     *
     * @access  private
     * @var     Cases
     */
    private $objCases  = NULL;
    
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
    public function __construct(Logger $objLogger, Cases $objCases, array $params)
    {
        $this->objLogger    = $objLogger;
        $this->objCases     = $objCases;
        $this->params       = $params;
    }
    
    /**
     * Realiza a criação de um arquivo de mailing no ftp da callflex.
     *
     * @access  public
     * @return  void
     * @throws  \RuntimeException
     * @throws  \Exception
     */
    public function createMailingFile()
    {
        try {
            $this->objLogger->info("Buscando dados.", []);
            $result = $this->objCases->listBaResolvido();
            if(!property_exists($result, 'totalSize') || !property_exists($result, 'records') || !((integer)$result->totalSize > 0)){
                throw new NotFoundHttpException();
            }
            $this->objLogger->info("Abrindo conexão FTP.", []);
            
            $objFtpCallFlex =  new FtpCallFlex($this->params['ftp']['host'], $this->params['ftp']['port'], $this->params['ftp']['timeout'], $this->params['ftp']['auth']);
            $objFtpCallFlex->pasv(TRUE);

            $localFile = date("Ymd_His_1_")."FULL.csv";
            $this->objLogger->info("Criando arquivo local.", []);
            $file = fopen("{$this->params['ftp']['pathLocal']}{$localFile}", "w");
            $linha = "Id;CaseNumber;Account;Account.Name;Account.CNPJ__c;Account.CID__c;tCircuito__r.Codigo__c;tContact;Contact.Name;Contact.Phone\n";
            fwrite($file, $linha);
            while($case = current($result->records)){
                $accountId = $case->Account->Id;
                $accountName = $case->Account->Name;
                $contactName = "";
                $contactPhone = "";
                $contactid = "";
                if(property_exists($case, "Contact") && is_object($case->Contact)){
                    if(property_exists($case->Contact, "Name")){
                        $contactName = $case->Contact->Name;
                    }
                    if(property_exists($case->Contact, "Phone") && (strlen(trim($case->Contact->Phone)))){
                        $contactPhone = preg_replace("/[^0-9]/", "", str_replace(["+055", "+55"], "", $case->Contact->Phone));
                    } elseif (property_exists($case->Contact, "MobilePhone") && (strlen(trim($case->Contact->MobilePhone)))){
                        $contactPhone = preg_replace("/[^0-9]/", "", str_replace(["+055", "+55"], "", $case->Contact->MobilePhone));
                    }
                    
                    if(property_exists($case->Contact, "Id")){
                        $contactid = $case->Contact->Id;
                    }
                }
                $var = [$case->Id, $case->CaseNumber, $accountId, $accountName, $case->Account->CNPJ__c, $case->Account->CID__c, $case->Circuito__r->Codigo__c, $contactid, $contactName, $contactPhone];
                $this->objLogger->info("Escrevendo linha.", ['indice'=>(key($result->records)+1), 'data'=> $var]);
                $linha = implode(";", $var)."\n";
                fwrite($file, $linha);
                next($result->records);
            }
            $this->objLogger->info("Fechando arquivo local.", []);
            fclose($file);
            
            $this->objLogger->info("Iniciando Upload.", ["{$this->params['ftp']['pathRemoto']}{$localFile}"]);
            $objFtpCallFlex->put("{$this->params['ftp']['pathLocal']}{$localFile}", "{$this->params['ftp']['pathRemoto']}{$localFile}");
            $this->objLogger->info("Finalizado Upload.", ["{$this->params['ftp']['pathRemoto']}{$localFile}"]);
        } catch (NotFoundHttpException $e){
            throw $e;
        } catch (\RuntimeException $e){
            throw $e;
        }catch (\Exception $e){
            throw $e;
        }
    }
}

