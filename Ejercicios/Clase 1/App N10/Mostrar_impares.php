<?php

/*Generar una aplicación que permita cargar los primeros 10 números impares en un Array. 
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el 
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando 
las estructuras while y foreach*/

$array_odd = array();
$counterWhile = 0;
$index_arrayOdd = 0;
for ($i = 0; $i < 20; $i++) {
    if ($i % 2 != 0) {
        array_push($array_odd, $i);
    }
}

echo "Impares mostrados con for";
for ($i = 0; $i < count($array_odd); $i++) {
    echo "<br>" . $array_odd[$i];
}

echo "<br><br>Impares mostrados con while";

while ($counterWhile < count($array_odd)) {
    echo "<br>" . $array_odd[$index_arrayOdd];
    $counterWhile++;
    $index_arrayOdd++;
}

echo "<br><br>Impares mostrados con foreach";

foreach ($array_odd as $number) {
    echo "<br>$number";
}
