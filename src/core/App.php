<?php

namespace vehicles\core;

use Faker\Factory;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use vehicles\classes\Car;
use vehicles\classes\Truck;

class App
{
    private $faker;
    private $logger;

    public function __construct()
    {
        $this->faker = Factory::create();
        $this->logger = new Logger('Logger');
        $this->logger->pushHandler(
            new StreamHandler(ROOT_PATH . '/runtime/vehicles.log', Logger::DEBUG)
        );
    }

    function get_id_plate(): string
    {
        return strtoupper($this->faker->bothify("??-###-??"));
    }

    function run()
    {
        $this->logger->debug("Generating a car...");
        $car = new Car(
            $this->get_id_plate(),
            $this->faker->numberBetween(10000, 50000),
            $this->faker->year
        );

        echo $car->price . '<br>';
        echo $car->year . '<br>';
        $car->start();

        echo '<hr>';

        $this->logger->debug("Generating a truck...");

        $truck = new Truck(
            $this->get_id_plate(),
            $this->faker->numberBetween(30000, 90000),
            $this->faker->year
        );

        echo $truck->price . '<br>';
        echo $truck->year . '<br>';
        $truck->start();
    }
}
