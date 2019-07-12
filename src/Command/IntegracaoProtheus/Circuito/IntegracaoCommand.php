<?php
namespace App\Command\IntegracaoProtheus\Circuito;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Services\IntegracaoProtheus;

class IntegracaoCommand extends Command
{
    use LockableTrait;
    
    protected static $defaultName = 'protheus:integracao:circuito';
    
    protected function configure()
    {
        $this->setName('protheus:integracao:circuito')
            ->setDescription('Comando para integração dos circuitos com o Protheus.')
            ->addOption('circ', 'c', InputOption::VALUE_OPTIONAL, 'Id do circuito ex.: --circ=123456', NULL)
            ->addOption('limit', 'l', InputOption::VALUE_OPTIONAL, 'Limite de registros por execução ex.: --limit=10', 50)
            ->setHelp("Este comando permite que você realize as integrações \nde circuitos do Sistech com o Protheus.")
        ;
    }
    
    protected function execute(InputInterface $objInputInterface, OutputInterface $objOutputInterface)
    {
        $objSymfonyStyle = new SymfonyStyle($objInputInterface, $objOutputInterface);
        $objSymfonyStyle->title("Integraço de circuitos PROTHEUS");
        $objSymfonyStyle->section("Início  ".date("Y-m-d H:i:s"));
        
        if (!$this->lock()) {
            $objSymfonyStyle->caution("O comando já está sendo executado em outro processo");
        }
        try {
            $objIntegracaoProtheus = $this->getApplication()->getKernel()->getContainer()->get('integracao_protheus');
            if(!($objIntegracaoProtheus instanceof IntegracaoProtheus)){
                $objSymfonyStyle->caution("Serviço de integração não localizado.");
                return 0;
            }

            $contCodigoid = $objInputInterface->getOption('circ');
            if($contCodigoid){
                if(!is_numeric($contCodigoid) || ((integer)$contCodigoid <= 0)){
                    $objSymfonyStyle->caution("O parâmetro [--circ|-c] deve ser um número inteiro maior que zero.");
                    return 0;
                }
                $objSymfonyStyle->note("Integrar circuito '{$contCodigoid}'");
//                 $objIntegracaoProtheus->circuito($contCodigoid);
                $objSymfonyStyle->success("Circuito '{$contCodigoid}' integrado");
            }else{
                $objSymfonyStyle->note("Integrar circuitos");
                $objIntegracaoProtheus->circuitos($objInputInterface->getOption('limit'));
                $objSymfonyStyle->success("Circuitos integrados");
            }
            
            $this->release();
            
        } catch (\Exception $e) {
            $objSymfonyStyle->error("ERRO");
            $objSymfonyStyle->error("Code:{$e->getCode()}");
            $objSymfonyStyle->error("File:{$e->getFile()}");
            $objSymfonyStyle->error("Line:{$e->getLine()}");
            $objSymfonyStyle->error("Message:{$e->getMessage()}");
            $this->release();
        }
        $objSymfonyStyle->section("Final ".date("Y-m-d H:i:s"));
    }
}
