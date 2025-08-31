<?php

require 'Model.php';

class Tarea extends Model
{
    public ?int $id = null;
    public string $titulo;
    public string $color = "#000";
    public bool $completado = false;

    public function __construct() {}

    // métodos //
    public function completado(): void
    {
        $this->completado = true;
    }

    public function cambiarColor(string $color): void
    {
        $this->color = $color;
    }
}
