<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Editor;

use GoF\Behavioral\Command\Framework\CommandInterface;

class UndoCommand implements CommandInterface
{
    private History $history;

    public function __construct(History $history)
    {
        $this->history = $history;
    }

    public function execute(): void
    {
        $this->history->pop()?->unexecute();
    }
}
