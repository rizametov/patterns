<?php

declare(strict_types=1);

namespace GoF\Behavioral\Observer;

class SpreadSheet implements ObserverInterface
{
    public function update(): void
    {
        echo "SpreadSheet got notified\n";
    }
}
