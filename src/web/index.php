<?php

namespace vehicles\web;

use Faker\Factory;
use vehicles\classes\Car;

define('ROOT_PATH', dirname(__DIR__, 2));
require ROOT_PATH . '/vendor/autoload.php';

function get_id_plate(): string
{
    $faker = Factory::create();
    return strtoupper($faker->bothify("??-###-??"));
}

dd(
    [
        new Car(get_id_plate()),
        new Car(get_id_plate()),
        new Car(get_id_plate())
    ]
);
