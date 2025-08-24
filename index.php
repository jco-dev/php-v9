<?php

require_once 'funciones.php'; // require include include_once  require_once
require_once 'Models/Tarea.php';


$tareas = [
    new Tarea('Aprender PHP', TRUE),
    new Tarea('Aprender VUE', FALSE),
    new Tarea('Aprender LARAVEL', FALSE),
    new Tarea(completado: true, titulo: "Comprar Pan")
];

$tareasCompletadas = array_filter($tareas, function ($tarea) {
    return $tarea->completado;
});

$tareasPendintes = array_filter($tareas, function ($tarea) {
    return !$tarea->completado;
});

require 'index.view.php';
