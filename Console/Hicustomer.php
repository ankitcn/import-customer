<?php

namespace CnAnkit\ImportCustomer\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

 

class Hicustomer extends Command
{
  protected function configure()
  {
    $this->setName('cnankit:customer');
    $this->setDescription('Demo command line');
    parent::configure();
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln("Hi Customer");
  }
}