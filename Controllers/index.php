<?php

$tareas = $query->obtrenerTodos('tareas', 'Tarea');

$tareasCompletadas = array_filter($tareas, function ($tarea) {
    return $tarea->completado;
});

$tareasPendintes = array_filter($tareas, function ($tarea) {
    return !$tarea->completado;
});

require 'Views/index.view.php';
