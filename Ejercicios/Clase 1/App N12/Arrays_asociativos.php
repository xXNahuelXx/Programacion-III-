<?php

/*Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que 
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres 
lapiceras.*/

$array_pen = array(
    array('Color' => 'Rojo', 'Marca' => 'Bic', 'Trazo' => 'Fino', 'Precio' => '$130'), array('Color' => 'Azul', 'Marca' => 'Bic', 'Trazo' => 'Grueso', 'Precio' => '$200'),
    array('Color' => 'Negro', 'Marca' => 'Bic', 'Trazo' => 'Medio', 'Precio' => '$150')
);


foreach ($array_pen as $key => $value) {
    echo "Lapicera " . ($key + 1) . ":<br>";
    foreach ($value as $clave => $valor) {
        echo $clave . ": " . $valor . "<br>";
    }
    echo "<br>";
}
