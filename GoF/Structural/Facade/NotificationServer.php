<?php

declare(strict_types=1);

namespace GoF\Structural\Facade;

class NotificationServer
{
    public function connect(string $ipAddress): Connection
    {
        return new Connection();
    }

    public function authenticate(string $appId, string $key): AuthToken
    {
        return new AuthToken();
    }

    public function send(AuthToken $token, Message $message, string $target): void
    {
        echo "Sending a message $message to $target\n";
    }
}
