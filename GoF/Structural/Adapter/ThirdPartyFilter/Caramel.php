<?php

declare(strict_types=1);

namespace GoF\Structural\Adapter\ThirdPartyFilter;

use GoF\Structural\Adapter\Image;

class Caramel
{
    public function init(): void {}

    public function render(Image $image): void 
    {
        echo "Applying Caramel Filter\n";
    }
}
