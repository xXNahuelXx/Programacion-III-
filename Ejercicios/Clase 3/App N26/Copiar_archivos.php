<?php
/*Generar una aplicación que sea capaz de copiar un archivo de texto (su ubicación se ingresará 
por la página) hacia otro archivo que será creado y alojado en 
./misArchivos/yyyy_mm_dd_hh_ii_ss.txt, dónde yyyy corresponde al año en curso, mm 
al mes, dd al día, hh hora, ii minutos y ss segundos.*/

date_default_timezone_set('America/Argentina/Buenos_Aires');
$clientFile = $_POST["clientPathFile"];
if(copy($clientFile,"./misArchivos/archivoCopiado " . date('Y_m_d_h_i_s') . ".txt"))
{
    echo "Archivo copiado<br>";
}else{
    "Algo salio mal";
}