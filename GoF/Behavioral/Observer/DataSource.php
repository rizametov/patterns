<?php

declare(strict_types=1);

namespace GoF\Behavioral\Observer;

class DataSource
{
    private int $value;

    private Subject $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }

    public function addObserver(ObserverInterface $observer): void
    {
        $this->subject->addObserver($observer);
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        $this->subject->removeObserver($observer);
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
        $this->subject->notifyObservers();
    }
}
