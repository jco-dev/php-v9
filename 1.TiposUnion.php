<?php
// Union Types

// 7
// function procesarDatos($dato)
// {
//     if (is_string($dato)) {
//         return strtoupper($dato);
//     } elseif (is_int($dato)) {
//         return $dato * 2;
//     }

//     return null;
// }

// echo procesarDatos(12);

// 8

function procesarDatos(string|int $dato): string|int|null
{
    if (is_string($dato)) {
        return strtoupper($dato);
    }

    return $dato * 2;
}

echo procesarDatos("Hola");
echo procesarDatos(5);

// echo procesarDatos([1]);
