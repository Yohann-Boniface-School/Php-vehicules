<?php

namespace vehicles\classes;

abstract class Vehicle
{
    protected $plate_id;
    private $price;
    private $year;
    private $id;

    public static $instance_id = 0;

    abstract public function start();

    public function __construct(string $plate_id)
    {
        $this->plate_id = $plate_id;
        $this->id = $this::$instance_id++;
    }
}