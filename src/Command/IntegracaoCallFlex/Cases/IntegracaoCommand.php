<?php
namespace App\Command\IntegracaoCallFlex\Cases;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Services\IntegracaoCallFlex;

class IntegracaoCommand extends Command
{
    use LockableTrait;
    
    protected static $defaultName = 'callflex:robo:createfile';
    
    protected function configure()
    {
        $this->setName('callflex:robo:createfile')
            ->setDescription('Comando para integração dos casos resovildos no salesforce.')
            ->setHelp("Este comando permite que você realize a integração dos casos \nresolvidos no salesforce com a mailing da callflex.")
        ;
    }
    
    protected function execute(InputInterface $objInputInterface, OutputInterface $objOutputInterface)
    {
        $objSymfonyStyle = new SymfonyStyle($objInputInterface, $objOutputInterface);
        $objSymfonyStyle->title("Geração de arquivos de integração");
        $objSymfonyStyle->section("Início  ".date("Y-m-d H:i:s"));
        
        if (!$this->lock()) {
            $objSymfonyStyle->caution("O comando já está sendo executado em outro processo");
        }
        try {
            $objIntegracaoCallflex = $this->getApplication()->getKernel()->getContainer()->get('integracao_callflex');
            if(!($objIntegracaoCallflex instanceof IntegracaoCallFlex)){
                $objSymfonyStyle->caution("Serviço de integração CallFlex não localizado.");
                return 0;
            }

            $objIntegracaoCallflex->createMailingFile();

//             $contCodigoid = $objInputInterface->getOption('circ');
//             if($contCodigoid){
//                 if(!is_numeric($contCodigoid) || ((integer)$contCodigoid <= 0)){
//                     $objSymfonyStyle->caution("O parâmetro [--circ|-c] deve ser um número inteiro maior que zero.");
//                     return 0;
//                 }
//                 $objSymfonyStyle->note("Integrar circuito '{$contCodigoid}'");
// //                 $objIntegracaoProtheus->circuito($contCodigoid);
//                 $objSymfonyStyle->success("Circuito '{$contCodigoid}' integrado");
//             }else{
//                 $objSymfonyStyle->note("Integrar circuitos");
//                 $objIntegracaoProtheus->circuitos($objInputInterface->getOption('limit'));
//                 $objSymfonyStyle->success("Circuitos integrados");
//             }
            
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
