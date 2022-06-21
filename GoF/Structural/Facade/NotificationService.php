<?php

declare(strict_types=1);

namespace GoF\Structural\Facade;

class NotificationService
{
    public function send(Message $message, string $target): void
    {
        $server = new NotificationServer();
        $connection = $server->connect("127.0.0.1");
        $authToken = $server->authenticate("appId", "key");
        $server->send($authToken, $message, $target);
        $connection->disconnect();
    }
}
