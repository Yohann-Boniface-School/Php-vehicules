<?php

namespace vehicles\web;

use vehicles\core\App;

define('ROOT_PATH', dirname(__DIR__, 2));
require ROOT_PATH . '/vendor/autoload.php';

$app = new App();
$app->run();
