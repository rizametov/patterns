<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Structural\Facade\NotificationService;

$notificationService = new NotificationService();
$notificationService->send("Hello", "Some target");
