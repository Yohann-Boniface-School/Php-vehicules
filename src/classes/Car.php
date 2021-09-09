<?php

namespace vehicles\classes;

class Car extends Vehicle
{

    public function __toString(): string
    {
        return "Car [$this->plate_id]";
    }

    public function start(): void
    {
        echo "$this has started";
    }
}
