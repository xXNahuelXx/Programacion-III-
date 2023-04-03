<?php

/*Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden de las
letras del Array. 
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/

$originalArray = array("H", "O", "L", "A");
showArray($originalArray);

echo "<br>";

$reverseArray = reverseContent($originalArray);
showArray($reverseArray);

function reverseContent($array)
{
    $chain = implode("", $array);
    $reverseString = strrev($chain);
    $reverseArray = str_split($reverseString);
    return $reverseArray;
}

function showArray($array)
{
    foreach ($array as $character) {
        echo $character . " ";
    }
}
