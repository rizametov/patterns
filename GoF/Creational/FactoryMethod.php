<?php

declare(strict_types=1);

abstract class Creator
{
    abstract public function factoryMethod(): Bike;

    public function getMaxSpeed(): int
    {
        $bike = $this->factoryMethod();

        return $bike->maxSpeed();
    }
}

class RoadBikeCreator extends Creator
{
    public function factoryMethod(): Bike
    {
        return new RoadBike();
    }
}

class MountainBikeCreator extends Creator
{
    public function factoryMethod(): Bike
    {
        return new MountainBike();
    }
}

interface Bike
{
    public function maxSpeed(): int;
}

class RoadBike implements Bike
{
    public function maxSpeed(): int
    {
        return 42;
    }
}

class MountainBike implements Bike
{
    public function maxSpeed(): int
    {
        return 22;
    }
}

// ========================================================================

function clientCode(Creator $creator): int
{
    return $creator->getMaxSpeed();
}


echo 'Max speed of road bike: ' . clientCode(new RoadBikeCreator()) . ' km/h' . PHP_EOL;

echo 'Max speed of mountain bike: ' . clientCode(new MountainBikeCreator()) . ' km/h' . PHP_EOL;
