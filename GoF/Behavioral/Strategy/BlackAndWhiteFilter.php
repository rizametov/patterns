<?php

declare(strict_types=1);

namespace GoF\Behavioral\Strategy;

class BlackAndWhiteFilter implements FilterInterface
{
    public function apply(string $fileName): void
    {
        echo "Applying B&W filter\n";
    }
}
