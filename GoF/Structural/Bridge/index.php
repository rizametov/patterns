<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Structural\Bridge\RemoteControl;
use GoF\Structural\Bridge\AdvancedRemoteControl;
use GoF\Structural\Bridge\SonyTV;
use GoF\Structural\Bridge\SamsungTV;

$remoteControl = new RemoteControl(new SonyTV());

$remoteControl->turnOn();
$remoteControl->turnOff();

$advancedRemoteControl = new AdvancedRemoteControl(new SamsungTV());

$advancedRemoteControl->setChannel(5);
