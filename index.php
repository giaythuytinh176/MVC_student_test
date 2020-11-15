<?php

use MVC\controllers\UrlControllers;
require_once __DIR__ . '/vendor/autoload.php';
$urlcontrollers = new UrlControllers();
$urlcontrollers->index();

//print("<pre>" . print_r($_SERVER['QUERY_STRING'], true) . "</pre>");
