<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Structural\Facade\NotificationService;
use GoF\Structural\Facade\Message;

$notificationService = new NotificationService();
$notificationService->send(new Message("Some message"), "target");
