<?php

namespace vehicles\classes;

class Truck extends Vehicle
{

    public function __toString(): string
    {
        return "[$this->plate_id]";
    }

    public function start(): void
    {
        echo "Truck $this has started";
    }

    public function accelerate(): void
    {
        echo "Truck $this accelerate";
    }
}
