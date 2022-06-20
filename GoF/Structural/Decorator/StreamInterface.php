<?php

declare(strict_types=1);

namespace GoF\Structural\Decorator;

interface StreamInterface
{
    public function write(string $data): void;
}
