<?php

declare(strict_types=1);

namespace GoF\Structural\Bridge;

use GoF\Structural\Bridge\DeviceInterface;

class SonyTV implements DeviceInterface
{
    public function turnOn(): void
    {
        echo "Sony: turnOn " . get_called_class() . "\n";
    }

    public function turnOff(): void
    {
        echo "Sony: turnOff " . get_called_class() . "\n";
    }

    public function setChannel(int $channelNumber): void
    {
        echo "Channel {$channelNumber} setted.\n";
    }
}
