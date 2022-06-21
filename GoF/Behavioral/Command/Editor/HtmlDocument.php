<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\Editor;

class HtmlDocument
{
    private string $content;

    public function makeBold(): void
    {
        $this->content = '<b>' . $this->content . '</b>';
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
