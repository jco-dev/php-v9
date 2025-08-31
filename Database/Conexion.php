<?php

class Conexion
{

    public static function conectar($config)
    {
        try {
            return new PDO("mysql:host={$config['host']};
            dbname={$config['database']}", $config['user'], $config['password']);
            // $pdo = new PDO("mysql:host=localhost;dbname=cursophp", "us_tareas", "1V9V\j|27V");
        } catch (PDOException $errores) {
            die('Error en la conexión en la base de datos: ' . $errores->getMessage());
        }
    }
}