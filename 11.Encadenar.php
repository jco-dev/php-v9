<?php

class Caja
{
    public function abrir()
    {
        return $this;
    }
}

$caja = (new Caja())->abrir();
var_dump($caja);

$nueva = new Caja()->abrir();
var_dump($nueva);
