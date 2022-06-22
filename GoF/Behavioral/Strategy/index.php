<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Behavioral\Strategy\ImageStorage;
use GoF\Behavioral\Strategy\JpegCompressor;
use GoF\Behavioral\Strategy\BlackAndWhiteFilter;

$storage = new ImageStorage(new JpegCompressor(), new BlackAndWhiteFilter());

$storage->store('Uloaded');
