<?php

declare(strict_types=1);

namespace GoF\Behavioral\Observer;

class Subject
{
    private array $observers;

    public function addObserver(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        if (false !== $index = array_search($observer, $this->observers, true)) {
            unset($this->observers[$index]);
        } else {
            echo "Observer not found\n";
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
