<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserListCommand extends Command
{
  protected function configure()
  {
    $this
      // the name of the command (the part after "bin/console")
      ->setName('user-list')

      // the short description shown while running "php bin/console list"
      ->setDescription('This is user list.')

      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command output user list..')
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    print 'hello world';
  }
}
