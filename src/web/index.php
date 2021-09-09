<?php

namespace vehicles\web;

use vehicles\classes\Vehicle;

define('ROOT_PATH', dirname(__DIR__, 2));
require ROOT_PATH . '/vendor/autoload.php';

$vec = new Vehicle();
dd($vec);
