<?php

namespace GoF\Structural\Adapter;

use GoF\Structural\Adapter\Image;

interface FilterInterface
{
    public function apply(Image $image): void;
}
