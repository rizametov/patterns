<?php

declare(strict_types=1);

namespace GoF\Behavioral\Strategy;

interface CompressorInterface
{
    public function compress(string $fileName): void;
}
