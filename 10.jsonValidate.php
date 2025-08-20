<?php

$texto = '{"nombre":"Ana"}';
$texto = "";

if (json_validate($texto)) {
    $datos = json_decode($texto, true);
    print_r($datos);
} else {
    echo "Error: el texto no contiene un JSON válido.";
}
