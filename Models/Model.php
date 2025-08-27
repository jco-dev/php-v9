<?php

class Model
{
    public function construirCadena(): string
    {
        $clase = new ReflectionClass($this);
        $propiedades = $clase->getProperties();

        $cadena = "";
        foreach ($propiedades as $propiedad) {
            $nombrePropiedad = $propiedad->name;
            $valorPropiedad  = $this->$nombrePropiedad;
            // $this->$nombrePropiedad
            // $cadena .= "{$nombrePropiedad} : {$this->$nombrePropiedad}\n";
            $cadena .= sprintf(
                "%s : %s\n",
                $nombrePropiedad,
                is_bool($valorPropiedad) ? var_export($valorPropiedad, true) : $valorPropiedad
            );
        }

        return $cadena;
    }

    public function guardar(?string $nombre = null): void
    {

        if (is_null($nombre)) {
            $clase = new ReflectionClass($this);
            $nombre = strtolower($clase->getShortName()) . '.txt';
        }

        $archivo = fopen($nombre, 'w');
        fwrite($archivo, $this->construirCadena());
        fclose($archivo);
    }
}
