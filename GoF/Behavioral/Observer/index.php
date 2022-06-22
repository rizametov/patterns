<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Behavioral\Observer\DataSource;
use GoF\Behavioral\Observer\Subject;
use GoF\Behavioral\Observer\SpreadSheet;
use GoF\Behavioral\Observer\Chart;

$dataSource = new DataSource(new Subject());
$spreadSheet1 = new SpreadSheet();
$spreadSheet2 = new SpreadSheet();
$chart = new Chart();

$dataSource->addObserver($spreadSheet1);
$dataSource->addObserver($spreadSheet2);
$dataSource->addObserver($chart);

$dataSource->setValue(1);

echo "After Remove\n";

$dataSource->removeObserver($spreadSheet1);

$dataSource->setValue(2);
