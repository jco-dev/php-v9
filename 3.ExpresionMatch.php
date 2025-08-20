<?php
// Match Expression

// function obtenerDiasSemana(int $numero): string
// {
//     switch ($numero) {
//         case 1:
//             return "Lunes";
//             break;
//         case 2:
//             return "Martes";
//             break;
//         case 3:
//             return "Miércoles";
//             break;
//         default:
//             return "Día inválido";
//     }
// }

// echo obtenerDiasSemana(23);
function obtenerDiasSemana(int $numero): string
{
    return match ($numero) {
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6, 7 => "Fin de semana",
        default => "Día inválido"
    };
}

echo obtenerDiasSemana(744);
