<?php

declare(strict_types=1);

namespace GoF\Structural\Composit;

class Group implements ComponentInterface
{
    private array $components = [];

    public function render(): void
    {
        foreach ($this->components as $component) {
            $component->render();
        }
    }

    public function move(int $x, int $y): void
    {
        foreach ($this->components as $component) {
            $component->move($x, $y);
        }
    }

    public function add(ComponentInterface $shape): void
    {
        $this->components[] = $shape;
    }
}
