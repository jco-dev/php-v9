<?php
require_once 'funciones.php';
require_once 'Validador.php';

$query = require 'bootstrap.php';

$reglas = [
    'titulo' => 'required|min:5',
    'color' => 'required|color_hexadecimal'
];

$mensajes = [
    'titulo' => [
        'required' => 'El campo titulo es obligatorio',
        'min' => 'El campo titulo debe tener minimamente 5 caracteres'
    ],
    'color' => [
        'required' => 'El campo color es obligatorio',
        'color_hexadecimal' => 'El campo color debe estar en un formato de color hexadecimal'
    ]
];

$validador = new Validador();
$validador->setReglas($reglas, $mensajes);

// dd($validador->validar($_POST));
if ($validador->validar($_POST)) {
    $query->insertar('tareas', [
        'titulo' => $_POST['titulo'],
        'color' => $_POST['color']
    ]);
} else {
    $_SESSION['errores'] = $validador->getErrores();
}


header('Location: /');