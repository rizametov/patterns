<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Composite;

use GoF\Behavioral\Command\Framework\CommandInterface;

class ResizeCommand implements CommandInterface
{
    public function execute(): void
    {
        echo "Resize\n";
    }
}
