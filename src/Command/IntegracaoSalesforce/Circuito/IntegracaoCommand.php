<?php
namespace App\Command\IntegracaoSalesforce\Circuito;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use App\Services\IntegracaoSalesforce;

class IntegracaoCommand extends Command
{
    use LockableTrait;
    
    protected static $defaultName = 'salesforce:integracao:circuito';
    
    protected function execute(InputInterface $objInputInterface, OutputInterface $objOutputInterface)
    {
        if (!$this->lock()) {
            $objOutputInterface->writeln('\n<error>O comando já está sendo executado em outro processo.</error>\n');
            return 0;
        }
        try {
            $objOutputInterface->writeln("<info>Início da integração de circuitos às ".date("Y-m-d H:i:s")."</info>");

            $objIntegracaoSalesforce = $this->getApplication()->getKernel()->getContainer()->get('integracao_salesforce');
            if(!($objIntegracaoSalesforce instanceof IntegracaoSalesforce)){
                $objOutputInterface->writeln("\n<error>Serviço de integração não localizado.</error>\n");
                return 0;
            }
            
            $contCodigoid = $objInputInterface->getOption('circ');
            if($contCodigoid){
                if(!is_numeric($contCodigoid) || ((integer)$contCodigoid <= 0)){
                    $objOutputInterface->writeln("\n<error>O parâmetro [--circ|-c] deve ser um número inteiro maior que zero.</error>\n");
                    return 0;
                }
                $objOutputInterface->writeln("<info>Integrar circuito '{$contCodigoid}'</info>");
                $objIntegracaoSalesforce->circuito($contCodigoid);
            }
            
            $objIntegracaoSalesforce->circuitos();
            $this->release();
            
        } catch (\Exception $e) {
            $objOutputInterface->writeln("<error>ERRO</error>");
            $objOutputInterface->writeln("<error>Code:{$e->getCode()}</error>");
            $objOutputInterface->writeln("<error>File:{$e->getFile()}</error>");
            $objOutputInterface->writeln("<error>Line:{$e->getLine()}</error>");
            $objOutputInterface->writeln("<error>Message:{$e->getMessage()}</error>\n");
            $this->release();
        }
        $objOutputInterface->writeln("<info>Fim da integração de circuitos às ".date("Y-m-d H:i:s")."</info>");
    }
    protected function configure()
    {
        $this->setName('salesforce:integracao:circuito')
            ->setDescription('Comando para integração dos circuitos com o Salesforce.')
            ->addOption('circ', 'c', InputOption::VALUE_OPTIONAL, 'Id do circuito ex.: --circ=123456', "NULL")
            ->setHelp("Este comando permite que você realize as integraçõs \nde circuitos do Sistech com o Salesforce.")
        ;
    }
}
