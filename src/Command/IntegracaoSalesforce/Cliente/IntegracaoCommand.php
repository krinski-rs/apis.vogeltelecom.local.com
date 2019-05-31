<?php
namespace App\Command\IntegracaoSalesforce\Cliente;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class IntegracaoCommand extends Command
{
    use LockableTrait;
    
    protected static $defaultName = 'salesforce:integracao:cliente';
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$this->lock()) {
            $output->writeln('The command is already running in another process.');
            
            return 0;
        }
        
        // If you prefer to wait until the lock is released, use this:
        // $this->lock(null, true);
        
        // ...
        
        // if not released explicitly, Symfony releases the lock
        // automatically when the execution of the command ends
        $this->release();
    }
}
