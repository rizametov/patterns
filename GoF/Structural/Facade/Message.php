<?php

declare(strict_types=1);

namespace GoF\Structural\Facade;

class Message
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
}
