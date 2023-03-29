<?php

/*Aplicación Nº 8 (Números en letras) 
Realizar un programa que en base al valor numérico de la variable $num, pueda mostrarse por
pantalla, el nombre del número que tenga dentro escrito con palabras, para los números entre 
el 20 y el 60. */

//Funciona pero no es 100% óptimo.
$number = 34;
$array_ten = array(20 => "Veinte", 30 => "Treinta", 40 => "Cuarenta", 50 => "Cincuenta", 60 => "Sesenta");
$array_unit = array(1 => "Uno", 2 => "Dos", 3 => "Tres", 4 => "Cuatro", 5 => "Cinco", 6 => "Seis", 7 => "Siete", 8 => "Ocho", 9 => "Nueve");

foreach ($array_ten as $key => $valor) {
    if ($key == $number) {
        echo $valor;
    } else {
        //Contemplar que si está entre 21 y 29, el string "Veinte" del array tiene que pasar a llamarse "Veinti"
        $ten = floor($number / 10) * 10;
        $unit = $number - $ten;
        foreach ($array_unit as $another_key => $another_valor) {
            if ($another_key == $unit) {
                echo $array_ten[$ten] . " y " . $another_valor;
                break;
            }
        }
    }
    break;
}
