<?php

declare(strict_types=1);

namespace GoF\Structural\Adapter;

use GoF\Structural\Adapter\Image;
use GoF\Structural\Adapter\FilterInterface;
use GoF\Structural\Adapter\ThirdPartyFilter\Caramel;

class CaramelFilter implements FilterInterface
{
    private Caramel $caramel;

    public function __construct(Caramel $caramel)
    {
        $this->caramel = $caramel;
    }

    public function apply(Image $image): void
    {
        $this->caramel->init();
        $this->caramel->render($image);
    }
}
