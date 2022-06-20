<?php

declare(strict_types=1);

namespace GoF\Structural\Decorator;

class CloudStream implements StreamInterface
{
    public function write(string $data): void
    {
        echo 'Storing data: ' . $data . PHP_EOL;
    }
}
