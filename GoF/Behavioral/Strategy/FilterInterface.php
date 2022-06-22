<?php

declare(strict_types=1);

namespace GoF\Behavioral\Strategy;

interface FilterInterface
{
    public function apply(string $fileName): void;
}
