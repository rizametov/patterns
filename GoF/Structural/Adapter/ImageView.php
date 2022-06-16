<?php

declare(strict_types=1);

namespace GoF\Structural\Adapter;

use GoF\Structural\Adapter\Image;
use GoF\Structural\Adapter\FilterInterface;

class ImageView
{
    private Image $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function apply(FilterInterface $filter): void
    {
        $filter->apply($this->image);
    }
}
