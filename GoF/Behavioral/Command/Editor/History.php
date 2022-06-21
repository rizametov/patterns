<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Editor;

use GoF\Behavioral\Command\Framework\UndoableCommandInterface;

class History
{
    private array $commands;

    public function push(UndoableCommandInterface $command): void
    {
        $this->commands[] = $command;
    }

    public function pop(): ?UndoableCommandInterface
    {
        return array_pop($this->commands);
    }
}
