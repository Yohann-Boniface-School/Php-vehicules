<?php

namespace vehicles\classes;

class Truck extends Vehicle
{

    public function __toString(): string
    {
        return "Truck [$this->plate_id]";
    }

    public function start(): void
    {
        echo "$this has started";
    }
}
