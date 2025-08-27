<?php

require_once 'funciones.php'; // require include include_once  require_once
require_once 'Models/Tarea.php';
require_once 'Enums/ColoresEnum.php';

$pdo = new PDO("mysql:host=localhost;dbname=cursophp", "root", "root");


$tareas = [
    new Tarea('Aprender PHP', true),
    new Tarea('Aprender VUE', false),
    new Tarea('Aprender LARAVEL', false),
    new Tarea(completado: true, titulo: "Comprar Pan")
];

$tareas[0]->cambiarColor(ColoresEnum::BLUE->value);
$tareas[1]->cambiarColor(ColoresEnum::GREEN->value);
$tareas[2]->cambiarColor(ColoresEnum::RED->value);

$tareasCompletadas = array_filter($tareas, function ($tarea) {
    return $tarea->completado;
});

$tareasPendintes = array_filter($tareas, function ($tarea) {
    return !$tarea->completado;
});

require 'index.view.php';
