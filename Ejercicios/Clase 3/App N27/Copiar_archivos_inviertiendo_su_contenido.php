<?php

/*Modificar el ejercicio anterior para que el contenido del archivo se copie de manera invertida, 
es decir, si el archivo origen posee ‘Hola mundo’ en el archivo destino quede ‘odnum aloH’.*/

date_default_timezone_set('America/Argentina/Buenos_Aires');

$clientFile=fopen($_POST["clientPathFile"],'r');
$stringReversed="";
if($clientFile){
    $lineaRead=fgets($clientFile);
    $stringReversed=strrev($lineaRead);
    if(fwrite(fopen("./misArchivos/archivoInvertido ". date('Y_m_d_h_i_s') . ".txt",'w'),$stringReversed)){
        echo "Archivo creado con exito!!!". PHP_EOL ."Atencion, se ha invertido el orden del contendio";
    }
    else{
        "Error al crear el archivo";
    }
}

fclose($clientFile);