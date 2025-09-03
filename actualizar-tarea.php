<?php
require_once 'funciones.php';

$query = require 'bootstrap.php';

$query->actualizar('tareas', $_POST['id'], [
    'completado' => $_POST['completado']
]);

header('Location: /');