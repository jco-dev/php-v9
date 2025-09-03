<?php
require_once 'funciones.php';

$query = require 'bootstrap.php';

$query->insertar('tareas', [
    'titulo' => $_POST['titulo'],
    'color' => $_POST['color']
]);

header('Location: /');