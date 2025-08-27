<?php

require 'Model.php';

class Tarea extends Model
{

    public function __construct(
        public string $titulo,
        public string $color = "#000",
        public bool $completado = false
    ) {}

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
