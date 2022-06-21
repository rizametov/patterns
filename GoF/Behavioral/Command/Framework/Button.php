<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Framework;

class Button
{
    private string $label;
    private CommandInterface $command;

    public function __construct(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function click(): void
    {
        $this->command->execute();
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }
}
