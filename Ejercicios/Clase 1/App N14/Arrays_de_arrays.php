<?php

/*Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que 
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.*/

$associative_array = array(
    "array_pets" => array('Perro', 'Gato', 'Raton', 'Araña', 'Mosca'),
    "array_date" => array('1986', '1996', '2015', '78', '86'),
    "array_language" => array('php', 'mysql', 'html5', 'typescript', 'ajax')
);

$indexed_array = array(
    array('Perro', 'Gato', 'Raton', 'Araña', 'Mosca'),
    array('1986', '1996', '2015', '78', '86'),
    array('php', 'mysql', 'html5', 'typescript', 'ajax')
);

echo "Muestro array Asociativo <br>";
foreach ($associative_array as $key => $array) {
    echo $key . ": ";
    foreach ($array as $value) {
        echo $value . "<br>";
    }
}

echo "<br>Muestro array Indexado <br>";
foreach ($indexed_array as $array) {
    foreach ($array as $value) {
        echo $value . "<br>";
    }
}
