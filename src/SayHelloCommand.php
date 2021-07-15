<?php declare(strict_types=1);

namespace Vantoozz\UpdateDependenciesTask;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class SayHelloCommand
 * @package Vantoozz\UpdateDependenciesTask
 */
final class SayHelloCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'say-hello';

    /**
     *
     */
    protected function configure(): void
    {
        $this
            ->setDescription('Says hello')
            ->setHelp('This commandgit says hello');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello!');
        return 0;
    }
}
