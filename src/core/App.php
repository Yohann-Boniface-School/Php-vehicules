<?php

namespace vehicles\core;

use Faker\Factory;
use vehicles\classes\Car;
use vehicles\classes\Truck;

class App
{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    function get_id_plate(): string
    {
        return strtoupper($this->faker->bothify("??-###-??"));
    }

    function run()
    {
        $car = new Car($this->get_id_plate());
        $car->start();

        echo '<br>';

        $truck = new Truck($this->get_id_plate());
        $truck->start();
    }
}
