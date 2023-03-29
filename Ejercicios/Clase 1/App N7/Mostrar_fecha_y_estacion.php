<?php

/*Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con 
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del 
año es. Utilizar una estructura selectiva múltiple.*/

$current_date = date("d-m-Y");

echo $current_date;
echo "<br>";
echo date("d/m/y", strtotime($current_date));
echo "<br>";
echo date("Y D M", strtotime($current_date));

$current_month = date("m");
switch ($current_month) {
    case 12:
    case 1:
    case 2:
        echo "<br>Es Verano";
        break;
    case 3:
    case 4:
    case 5:
        echo "<br>Es Otoño";
        break;
    case 6:
    case 7:
    case 8:
        echo "<br>Es Invierno";
        break;
    case 9:
    case 10:
    case 11:
        echo "<br>Es Primavera";
        break;
}
