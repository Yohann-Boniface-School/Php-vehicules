<?php

namespace vehicles\classes;

class Car extends Vehicle
{

    public function __toString(): string
    {
        return "$this->plate_id";
    }
}