<?php

declare(strict_types=1);

namespace GoF\Structural\Composit;

class Shape implements ComponentInterface
{
    public function render(): void
    {
        echo 'Render Shape' . PHP_EOL;
    }

    public function move(int $x, int $y): void
    {
        echo 'Move Shape to point ' . $x . ' and ' . $y . PHP_EOL;
    }
}
