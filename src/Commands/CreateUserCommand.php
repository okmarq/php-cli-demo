<?php

// src/Command/CreateUserCommand.php
namespace Okmarq\PhpCliDemo\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// the name of the command is what users type after "php bin/console"
#[AsCommand(
    name: 'app:create-user',
    description: 'Creates a new user.',
    hidden: false,
    aliases: ['app:add-user']
)]
class CreateUserCommand extends Command
{
    protected function configure(): void
    {
        $this
            // the command help shown when running the command with the "--help" option
            ->setHelp('This command allows you to create a user...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ... put here the code to create the user

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        try {
            //code...
            // return this if there was no problem running the command
            // (it's equivalent to returning int(0))
            return Command::SUCCESS;
        } catch (\Throwable $th) {
            //throw $th;

            if ($th == '') {
                // or return this to indicate incorrect command usage; e.g. invalid options
                // or missing arguments (it's equivalent to returning int(2))
                return Command::INVALID;
            }

            // or return this if some error happened during the execution
            // (it's equivalent to returning int(1))
            return Command::FAILURE;
        }
    }
}