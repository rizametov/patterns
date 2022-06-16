<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Structural\Adapter\ImageView;
use GoF\Structural\Adapter\Image;
use GoF\Structural\Adapter\VividFilter;
use GoF\Structural\Adapter\CaramelFilter;
use GoF\Structural\Adapter\ThirdPartyFilter\Caramel;

$imageView = new ImageView(new Image());
$imageView->apply(new VividFilter());
$imageView->apply(new CaramelFilter(new Caramel()));
