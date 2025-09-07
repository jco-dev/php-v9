<?php

$variable1 = 'variable2';

$variable2 = 'yo soy la variable 2';


echo $$variable1;

function saludar () {
    echo 'yo soy la funcion';
}

echo '<br>';
$funcion = 'saludar';


$funcion();
// saludar();
