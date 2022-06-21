<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Behavioral\Command\Framework\Button;

use GoF\Behavioral\Command\CustomerService\CustomerService;
use GoF\Behavioral\Command\CustomerService\AddCustomerCommand;

use GoF\Behavioral\Command\Composite\CompositeCommand;
use GoF\Behavioral\Command\Composite\ResizeCommand;
use GoF\Behavioral\Command\Composite\BlackAndWhiteCommand;

use GoF\Behavioral\Command\Editor\HtmlDocument;
use GoF\Behavioral\Command\Editor\History;
use GoF\Behavioral\Command\Editor\BoldCommand;
use GoF\Behavioral\Command\Editor\UndoCommand;

// Command Point
$service = new CustomerService();
$command = new AddCustomerCommand($service);
$button = new Button($command);
$button->click();

// Composit Command Point
$compositeCommand = new CompositeCommand();
$compositeCommand->addCommand(new ResizeCommand());
$compositeCommand->addCommand(new BlackAndWhiteCommand());
$compositeCommand->execute();

// Undoable Command Point
$document = new HtmlDocument();
$document->setContent('test');
$history = new History();
$command = new BoldCommand($document, $history);

$command->execute();
var_dump($document->getContent());

$undoCommand = new UndoCommand($history);
$undoCommand->execute();

var_dump($document->getContent());
