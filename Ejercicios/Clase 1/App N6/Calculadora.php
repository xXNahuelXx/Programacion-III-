<?php

/*Escribir un programa que use la variable $operador que pueda almacenar los símbolos 
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al 
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.*/

$operator = "+"; //Probar asignando '-' , '*' y '/'
$op1 = 8;
$op2 = 3;

switch($operator){
    case '+':
        echo "$op1 + $op2 = ",$op1+$op2;
        break;
    case '-':
        echo "$op1 - $op2 = ",$op1-$op2;
        break;
    case '*':
        echo "$op1 * $op2 = ",$op1*$op2;
        break;
    case '/':
        echo "$op1 / $op2 = ",$op1/$op2;
        break;
}
?>