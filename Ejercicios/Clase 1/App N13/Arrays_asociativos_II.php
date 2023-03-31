<?php

/*Cargar los tres arrays con los siguientes valores y luego ‘juntarlos’ en uno. Luego mostrarlo por 
pantalla.
“Perro”, “Gato”, “Ratón”, “Araña”, “Mosca”
“1986”, “1996”, “2015”, “78”, “86”
“php”, “mysql”, “html5”, “typescript”, “ajax”
Para cargar los arrays utilizar la función array_push. Para juntarlos, utilizar la función 
array_merge.
*/

/*$array_pets=array("Perro","Gato","Raton","Araña","Mosca");
$array_date=array("1986","1996","2015","78","86");
$array_language=array("php","mysql","html5","typescript","ajax");*/

$array_pets = array();
$array_date = array();
$array_language = array();
$array_contains_all;

array_push($array_pets, "Perro");
array_push($array_pets, "Gato");
array_push($array_pets, "Raton");
array_push($array_pets, "Araña");
array_push($array_pets, "Mosca");

array_push($array_date, "1986");
array_push($array_date, "1996");
array_push($array_date, "2015");
array_push($array_date, "78");
array_push($array_date, "86");

array_push($array_language, "php");
array_push($array_language, "mysql");
array_push($array_language, "html5");
array_push($array_language, "typescript");
array_push($array_language, "ajax");

$array_contains_all = array_merge($array_pets, $array_date, $array_language);

foreach ($array_contains_all as $value) {
    echo $value . "<br>";
}
