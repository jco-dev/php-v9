<?php
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