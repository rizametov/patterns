<?php

declare(strict_types=1);

namespace GoF\Behavioral\Strategy;

class PngCompressor implements CompressorInterface
{
    public function compress(string $fileName): void
    {
        echo "Compressing using PNG\n";
    }
}
