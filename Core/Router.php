<?php
class Router {
    protected array $rutas = [];

    public function registrar(array $rutas)
    {
        $this->rutas = $rutas;
    }

    public function manejar(string $url)
    {
        if (array_key_exists($url, $this->rutas)) {
            return $this->rutas[$url];
        }

        die('Ruta no encontrada');
    }
}