<?php

/*Dadas tres variables numéricas de tipo entero $a, $b y $c, realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido. 
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8. 
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”*/

$a = 6;
$b = 9;
$c = 8;
$aux;
$numbers = array($a,$b,$c);

for($i=0;$i<count($numbers)-1;$i++){
    for($j=$i+1;$j<count($numbers);$j++){
        if($numbers[$i]>$numbers[$j]){
            $aux=$numbers[$i];
            $numbers[$i]=$numbers[$j];
            $numbers[$j]=$aux;
        }
    }
}

if($numbers[1]!= $numbers[0] && $numbers[1]!= $numbers[2]){
    echo "El valor del medio es: ",$numbers[1];
}
else{
    echo "No hay valor del medio";
}
?>