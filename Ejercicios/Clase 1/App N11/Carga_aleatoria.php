<?php

/*Imprima los valores del vector asociativo siguiente usando la estructura de control foreach: 
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';*/

$associative_array = array(1 => 90, 30 => 7, 'e' => 99, 'hola' => 'mundo');
foreach ($associative_array as $valor => $key) {
    echo "valor=> $valor clave=> $key<br>";
}
