<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Editor;

use GoF\Behavioral\Command\Framework\UndoableCommandInterface;

class BoldCommand implements UndoableCommandInterface
{
    private string $prevContent;
    private HtmlDocument $document;
    private History $history;

    public function __construct(HtmlDocument $document, History $history)
    {
        $this->document = $document;
        $this->history = $history;
    }

    public function unexecute(): void
    {
        $this->document->setContent($this->prevContent);
    }

    public function execute(): void
    {
        $this->prevContent = $this->document->getContent();
        $this->document->makeBold();
        $this->history->push($this);
    }
}
