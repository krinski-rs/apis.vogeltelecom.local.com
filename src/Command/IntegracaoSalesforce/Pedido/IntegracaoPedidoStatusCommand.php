<?php
namespace App\Command\IntegracaoSalesforce\Pedido;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Services\Pedido;
use Symfony\Component\HttpFoundation\Request;
use App\Services\IntegracaoProtheus;

class IntegracaoPedidoStatusCommand extends Command
{
    use LockableTrait;

    protected static $defaultName = 'salesforce:update:pedidostatus';

    protected function execute(InputInterface $objInputInterface, OutputInterface $objOutputInterface)
    {
        if (!$this->lock()) {
            $objOutputInterface->writeln('\n<error>O comando já está sendo executado em outro processo.</error>\n');
            return 0;
        }

        try {
            $objOutputInterface->writeln("<info>Início do update de status dos pedidos às ".date("Y-m-d H:i:s")."</info>");

            $objPedido = $this->getApplication()->getKernel()->getContainer()->get('pedido');
            $objIntegracaoProtheus = $this->getApplication()->getKernel()->getContainer()->get('integracao_protheus');
            if(!($objPedido instanceof Pedido)){
                $objOutputInterface->writeln("\n<error>Serviço de Pedido não localizado.</error>\n");
                return 0;
            }

            if(!($objIntegracaoProtheus instanceof IntegracaoProtheus)){
                $objOutputInterface->writeln("\n<error>Serviço de IntegracaoProtheus não localizado.</error>\n");
                return 0;
            }

            $arrayPedidos = $objPedido->getPedidoStatusSalesforce();
            $pedidosComparar = [];
            if(count($arrayPedidos)){
                reset($arrayPedidos);
                $ids = [];
                while($pedidos = current($arrayPedidos)){
                    $ids[] = "'{$pedidos['idInvoice']}'";
                    $pedidosComparar[$pedidos['idInvoice']] = $pedidos['statusPagamentoSalesforce'];
                    next($arrayPedidos);
                }
                $objRequest = new Request();
                $objRequest->attributes->set('ids', $ids);
                $objRequest->attributes->set('limit', 100000);
                $arrayStatusPedidos = $objIntegracaoProtheus->getStatusPedidos($ids);
                if(!count($arrayStatusPedidos)){
                    $objOutputInterface->writeln("<info>Pedidos atualizados</info>");
                    $this->release();
                    return 0;
                }

                $arrayUpdate = [];
                $arrayNotas = [];
                $arrayStatus = [];
                reset($arrayStatusPedidos);
                while($statusPedidos = current($arrayStatusPedidos)){
                    $baixa = true;
                    $baixaProtheus = (bool) trim($statusPedidos['baixa(Protheus)']);
                    if($baixaProtheus != $pedidosComparar[$statusPedidos['pedido']]){
                        $baixa = $baixaProtheus;
                    }
                    $arrayUpdate[] = (integer)$statusPedidos['pedido'];
                    $arrayNotas[$statusPedidos['pedido']] = $statusPedidos['F2_DOC'];
                    $arrayStatus[$statusPedidos['pedido']] = $baixa;
                    next($arrayStatusPedidos);
                }
                $objRequest->attributes->set('ids', $arrayUpdate);
                $objRequest->attributes->set('notas', $arrayNotas);
                $objRequest->attributes->set('status', $arrayStatus);
                $objPedido->updateStatusPagamentoSalesforce($objRequest);
            }
            $objOutputInterface->writeln("<info>Pedidos atualizados</info>");
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
        $this->setName('salesforce:update:pedidostatus')
            ->setDescription('Comando para atualizar o status dos pedidos dos ultimos 3 meses.')
            ->setHelp("Este comando permite que você realize update \nno status do pedido do Salesforce.")
        ;
    }
}
