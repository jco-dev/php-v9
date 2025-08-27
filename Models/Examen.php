<?php

class Examen extends Model
{

    public function __construct(
        public string $tema,
        public bool $completado = false,
        public string $fecha = "2025-05-05"
    ) {}

    // metodos //
    public function completado(): void
    {
        $this->completado = true;
    }
}
