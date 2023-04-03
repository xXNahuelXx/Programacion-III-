<?php

/*Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función que 
las calcule invocando la función pow).*/

for ($i = 1; $i < 5; $i++) {
    echo "$i^2 -> " . calculatePower($i) . "<br>";
}

function calculatePower($number): int
{
    return pow($number, 2);
}
