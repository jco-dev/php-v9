<?php
// Named Arguments

function crearUsuario(string $nombre, string $email, int $edad = 18, bool $activo = true)
{
    return [
        'nombre' => $nombre,
        'email'  => $email,
        'edad'   => $edad,
        'activo' => $activo,
    ];
}

// 7
$usuario1 = crearUsuario("Juan", "juan@gmail.com", 25, false);
var_dump($usuario1);

// 8
$usuario2 = crearUsuario(
    nombre: "María",
    email: "maria@gmail.com",
    activo: false,
    edad: 18
);

var_dump($usuario2);
