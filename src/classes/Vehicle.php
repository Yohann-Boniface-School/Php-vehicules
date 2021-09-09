<?php

namespace vehicles\classes;

abstract class Vehicle
{
    protected $plate_id;
    public $price;
    public $year;
    private $id;

    public static $instance_id = 0;

    abstract public function start();
    abstract public function accelerate();

    public function __construct(string $plate_id, $price, $year)
    {
        $this->plate_id = $plate_id;
        $this->id = $this::$instance_id++;

        $this->price = $price;
        $this->year = $year;
    }
}
