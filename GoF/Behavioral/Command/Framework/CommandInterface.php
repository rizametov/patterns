<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Framework;

interface CommandInterface
{
    public function execute(): void;
}
