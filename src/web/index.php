<?php

namespace vehicles\web;

use vehicles\classes\Car;

define('ROOT_PATH', dirname(__DIR__, 2));
require ROOT_PATH . '/vendor/autoload.php';


dd(
    [
        "Car" => new Car("CD-400-NY"),
        "Car2" => new Car("GB-082-DW")
    ]
);
