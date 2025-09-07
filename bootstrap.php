<?php
session_start();
$config = require_once('config.php');
if ($config['error']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require_once 'Database/Conexion.php';
require_once 'Database/GeneradorConsultas.php';

$pdo = Conexion::conectar($config['database']);
return new GeneradorConsultas($pdo);