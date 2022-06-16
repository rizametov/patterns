<?php

declare(strict_types=1);

namespace GoF\Structural\Adapter;

use GoF\Structural\Adapter\Image;
use GoF\Structural\Adapter\FilterInterface;

class VividFilter implements FilterInterface
{
    public function apply(Image $image): void
    {
        echo "Applying Vivid Filter\n";
    }
}
