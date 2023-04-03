<?php

/*Crear una función llamada EsPar que reciba un valor entero como parámetro y devuelva TRUE si 
este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función EsImpar.*/

$number = 3;

echo isEven($number) ? "Funcion esPar-> El numero $number es par" : "Funcion esPar->El numero $number es impar";
echo isOdd($number) ? "<br>Funcion esImpar->El numero $number es impar" : "<br>Funcion esImpar->El numero $number es par";

function isEven($number)
{
    return $number % 2 == 0 ? true : false;
}

function isOdd($number)
{
    return !isEven($number);
}
