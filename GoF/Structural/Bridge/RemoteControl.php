<?php

declare(strict_types=1);

namespace GoF\Structural\Bridge;

class RemoteControl
{
    protected DeviceInterface $device;

    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function turnOn(): void
    {
        $this->device->turnOn();
    }

    public function turnOff(): void
    {
        $this->device->turnOff();
    }
}
