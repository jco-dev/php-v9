<?php

// mixed type

function procesarValor(mixed $valor): mixed
{
    echo "<br>Recibí: " . var_export($valor, true) . "(tipo: " . gettype($valor) . ")<br>";
    return match (gettype($valor)) {
        'string' => strtoupper($valor),
        'integer' => $valor * 2,
        'boolean' => $valor ? "VERDADERO" : "FALSO",
        'array'   => count($valor),
        'NULL'    => "Era null",
        default   => "Tipo de dato no soportado: " . gettype($valor)
    };
}

echo procesarValor("Hola");
echo procesarValor([1, 2, 3]);
