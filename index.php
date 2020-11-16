<?php

use MVC\controllers\UrlControllers;
require_once __DIR__ . '/vendor/autoload.php';
$urlcontrollers = new UrlControllers();
$urlcontrollers->index();
