<?php

namespace vehicles\classes;

class Car extends Vehicle
{

    public function __toString(): string
    {
        return "[$this->plate_id]";
    }

    public function start(): void
    {
        echo "Car $this has started";
    }

    public function accelerate(): void
    {
        echo "Car $this accelerate";
    }
}
