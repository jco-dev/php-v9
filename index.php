<?php
require_once 'funciones.php'; // require include include_once  require_once
require_once 'Models/Tarea.php';
require_once 'Enums/ColoresEnum.php';

$query = require 'bootstrap.php';

$tareas = $query->obtrenerTodos('tareas', 'Tarea');

// $tareas[0]->cambiarColor(ColoresEnum::GREEN->value);

$tareasCompletadas = array_filter($tareas, function ($tarea) {
    return $tarea->completado;
});

$tareasPendintes = array_filter($tareas, function ($tarea) {
    return !$tarea->completado;
});

require 'index.view.php';
