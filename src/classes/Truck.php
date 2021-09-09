<?php

namespace vehicles\classes;

class Truck extends Vehicle
{

    public function __toString(): string
    {
        return "$this->plate_id car";
    }

    public function start(): void
    {
        echo "$this has started";
    }
}
