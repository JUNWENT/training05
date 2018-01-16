<?php

include 'vendor/autoload.php';

require __DIR__.'/vendor/autoload.php';

use App\Command\UserListCommand;
use Symfony\Component\Console\Application;

$application = new Application();


// add command.
include 'UserListCommand.php';
$application->add(new UserListCommand());

$application->run();
