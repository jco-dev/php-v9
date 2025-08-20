<?php

// Emum
enum Estado: string
{
    case BORRADOR = 'borrador';
    case PUBLICADO = 'publicado';
}

$estado = Estado::PUBLICADO;

if ($estado === estado::BORRADOR) {
    echo "El estado es borrador.";
} else {
    echo "El estado es publicado.";
}
