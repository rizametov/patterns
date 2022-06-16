<?php

declare(strict_types=1);

namespace GoF\Structural\Bridge;

use GoF\Structural\Bridge\DeviceInterface;

class SamsungTV implements DeviceInterface
{
    public function turnOn(): void
    {
        echo "Samsung: turnOn " . get_called_class() . "\n";
    }

    public function turnOff(): void
    {
        echo "Samsung: turnOff " . get_called_class() . "\n";
    }

    public function setChannel(int $channelNumber): void
    {
        echo "Samsung {$channelNumber} setted.\n";
    }
}
