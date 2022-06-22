<?php

declare(strict_types=1);

namespace GoF\Behavioral\Strategy;

class JpegCompressor implements CompressorInterface
{
    public function compress(string $fileName): void
    {
        echo "Compressing using JPEG\n";
    }
}
