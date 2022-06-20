<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Structural\Composit\Shape;
use GoF\Structural\Composit\Group;

$group1 = new Group();
$group1->add(new Shape());
$group1->add(new Shape());

$group2 = new Group();
$group2->add(new Shape());
$group2->add(new Shape());

$group = new Group();
$group->add($group1);
$group->add($group2);

$group->render();
$group->move(4, 2);
