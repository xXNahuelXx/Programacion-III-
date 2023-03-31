<?php

/*Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la 
función rand). Mediante una estructura condicional, determinar si el promedio de los números 
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el 
resultado.*/

$array_number = array();
$accumulator = 0;
$average;

echo "Numeros cargados<br>========<br>";
for ($i = 0; $i < 5; $i++) {
    $array_number[$i] = rand(1, 20);
    $accumulator += $array_number[$i];
    echo $array_number[$i] . "<br>";
}

$average = ((float)$accumulator) / 5;
if ($average < 6) {
    echo "<br>El promedio es menor a 6: $average";
} else if ($average > 6) {
    echo "<br>El promedio es mayor a 6: $average";
} else {
    echo "<br>El promedio es igual a 6: $average";
}
