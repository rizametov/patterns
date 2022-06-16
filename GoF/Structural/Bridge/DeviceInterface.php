<?php

declare(strict_types=1);

namespace GoF\Structural\Bridge;

interface DeviceInterface
{
    public function turnOn(): void;

    public function turnOff(): void;

    public function setChannel(int $channelNumber): void;
}
