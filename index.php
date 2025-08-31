<?php
$config = require_once('config.php');
if ($config['error']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require_once 'funciones.php'; // require include include_once  require_once
require_once 'Models/Tarea.php';
require_once 'Enums/ColoresEnum.php';
require_once 'Database/Conexion.php';
require_once 'Database/GeneradorConsultas.php';


// $pdo = dbConectar();
// opcion 1
// $conexion = new Conexion();
// $pdo = $conexion->conectar();
// opcion 2
// $pdo = (new Conexion())->conectar();

// opcion 3
$pdo = Conexion::conectar($config['database']);
$query = new GeneradorConsultas($pdo);


// $tareas = obtenerTareas($pdo);

$tareas = $query->obtrenerTodos('tareas', 'Tarea');

$tareas[0]->cambiarColor(ColoresEnum::GREEN->value);

$tareasCompletadas = array_filter($tareas, function ($tarea) {
    return $tarea->completado;
});

$tareasPendintes = array_filter($tareas, function ($tarea) {
    return !$tarea->completado;
});

require 'index.view.php';
