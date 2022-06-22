<?php

declare(strict_types=1);

namespace GoF\Behavioral\Observer;

class Chart implements ObserverInterface
{
    public function update(): void
    {
        echo "Chart got updated\n";
    }
}
