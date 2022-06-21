<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Framework;

interface UndoableCommandInterface extends CommandInterface
{
    public function unexecute(): void;
}
