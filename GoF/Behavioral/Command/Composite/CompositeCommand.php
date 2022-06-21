<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Composite;

use GoF\Behavioral\Command\Framework\CommandInterface;

class CompositeCommand implements CommandInterface
{
    private array $commands;

    public function addCommand(CommandInterface $command): void
    {
        $this->commands[] = $command;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
