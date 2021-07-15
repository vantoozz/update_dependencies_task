<?php declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Vantoozz\UpdateDependenciesTask\SayHelloCommand;

$application = new Application();

$application->setName('Update Dependencies Task');

$application->add(new SayHelloCommand());

$application->run();
