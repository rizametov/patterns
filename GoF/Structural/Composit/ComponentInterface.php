<?php

declare(strict_types=1);

namespace GoF\Structural\Composit;

interface ComponentInterface
{
    public function render(): void;

    public function move(int $x, int $y): void;
}
