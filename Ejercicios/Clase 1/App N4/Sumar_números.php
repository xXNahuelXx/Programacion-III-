<?php

/*Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no 
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números 
se sumaron.*/

$acum=0;
$i=1;

for(;$acum+$i<1000;$i++){
    echo $i . "<br>";
    $acum+=$i;
}

echo "Se sumaron $i números<br>El total es: $acum";

?>