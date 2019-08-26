<?php
namespace App\Command\IntegracaoSalesforce\Pedido;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use App\Services\IntegracaoSalesforce;

class IntegracaoUpdateStatusCommand extends Command
{
    use LockableTrait;
    
    protected static $defaultName = 'salesforce:update:statuspedido';
    
    protected function execute(InputInterface $objInputInterface, OutputInterface $objOutputInterface)
    {
        if (!$this->lock()) {
            $objOutputInterface->writeln('\n<error>O comando já está sendo executado em outro processo.</error>\n');
            return 0;
        }
        try {
            $objOutputInterface->writeln("<info>Início do update de status do pedidos às ".date("Y-m-d H:i:s")."</info>");

            $objIntegracaoSalesforce = $this->getApplication()->getKernel()->getContainer()->get('integracao_salesforce');
            if(!($objIntegracaoSalesforce instanceof IntegracaoSalesforce)){
                $objOutputInterface->writeln("\n<error>Serviço de integração não localizado.</error>\n");
                return 0;
            }
            
//             $pedido = $objInputInterface->getOption('pedido');
//             if($pedido){
//                 if(!is_numeric($pedido) || ((integer)$pedido <= 0)){
//                     $objOutputInterface->writeln("\n<error>O parâmetro [--pedido|-p] deve ser um número inteiro maior que zero.</error>\n");
//                     return 0;
//                 }
//                 $objOutputInterface->writeln("<info>Integrar pedido '{$pedido}'</info>");
//                 $objIntegracaoSalesforce->pedido($pedido);
//                 $objOutputInterface->writeln("<info>Pedido '{$pedido}' integrado</info>");
//             }else{
//                 $objOutputInterface->writeln("<info>Integrar pedidos</info>");
//                 $objIntegracaoSalesforce->pedidos($objInputInterface->getOption('limit'));
//                 $objOutputInterface->writeln("<info>Pedidos integrados</info>");
//             }
            
            $this->release();
            
        } catch (\Exception $e) {
            $objOutputInterface->writeln("<error>ERRO</error>");
            $objOutputInterface->writeln("<error>Code:{$e->getCode()}</error>");
            $objOutputInterface->writeln("<error>File:{$e->getFile()}</error>");
            $objOutputInterface->writeln("<error>Line:{$e->getLine()}</error>");
            $objOutputInterface->writeln("<error>Message:{$e->getMessage()}</error>\n");
            $this->release();
        }
        $objOutputInterface->writeln("<info>Fim do update de status do pedidos às ".date("Y-m-d H:i:s")."</info>");
    }
    
    protected function configure()
    {
        $this->setName('salesforce:update:statuspedido')
            ->setDescription('Comando para atualizar o status do pedido.')
            ->addOption('pedido', 'p', InputOption::VALUE_OPTIONAL, 'Id do pedido ex.: --pedido=123456', NULL)
            ->addOption('limit', 'l', InputOption::VALUE_OPTIONAL, 'Limite de registros por execução ex.: --limit=10', 50)
            ->setHelp("Este comando permite que você realize update \nno status do pedido do Salesforce.")
        ;
    }
}
