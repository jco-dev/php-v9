<?php

$texto = "Hola mundo PHP";

// 7
$contiene = strpos($texto, "mundo") !== false;

// 8
$contiene = str_contains($texto, 'mundo'); //true
$contiene = str_contains($texto, 'JAVA'); //false


$archivo = "documento.php";

// verificar extensión
if (str_ends_with($archivo, '.php')) {
    echo "Es un documento PDF";
}

$url = "https://cursosposgrado.upea.bo";
if (str_starts_with($url, 'https://')) {
    echo "URL segura";
}
