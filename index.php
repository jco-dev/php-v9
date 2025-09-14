<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/funciones.php';

use Dotenv\Dotenv;

// var_dump(__DIR__);

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// echo '<pre>';
// var_dump($_ENV);
$query = require 'Core/bootstrap.php';
require 'Models/Tarea.php';
require 'Core/Router.php';
require 'Core/Request.php';

$rutas = require 'routes.php';

$url = Request::url();

$router = new Router;
$router->registrar($rutas);

// echo $router->manejar($url);
require $router->manejar($url);

// require 'Controllers/index.php';