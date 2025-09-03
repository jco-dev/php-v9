<?php
require_once 'funciones.php';

$query = require 'bootstrap.php';

$query->eliminar('tareas', $_POST['id']);

header('Location: /');