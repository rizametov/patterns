<?php

declare(strict_types=1);

namespace GoF\Behavioral\Observer;

interface ObserverInterface
{
    public function update(): void;
}
