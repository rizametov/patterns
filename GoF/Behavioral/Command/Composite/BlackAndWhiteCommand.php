<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Composite;

use GoF\Behavioral\Command\Framework\CommandInterface;

class BlackAndWhiteCommand implements CommandInterface
{
    public function execute(): void
    {
        echo "Black and white\n";
    }
}
