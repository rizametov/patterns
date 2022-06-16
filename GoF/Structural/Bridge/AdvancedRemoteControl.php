<?php

declare(strict_types=1);

namespace GoF\Structural\Bridge;

class AdvancedRemoteControl extends RemoteControl
{
    public function __construct(DeviceInterface $device)
    {
        parent::__construct($device);
    }

    public function setChannel(int $channelNumber): void
    {
        $this->device->setChannel($channelNumber);
    }
}
