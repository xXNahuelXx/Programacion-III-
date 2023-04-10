<?php
/*Se quiere realizar una aplicación que lea un archivo (../misArchivos/palabras.txt) y ofrezca 
estadísticas sobre cuantas palabras de 1, 2, 3, 4 y más de 4 letras hay en el texto. No tener en 
cuenta los espacios en blanco ni saltos de líneas como palabras. Los resultados mostrarlos en una tabla.*/

$pathFile = "./Mis Archivos/palabras.txt";
$fileReference = fopen($pathFile, 'r');
$stats = array("1" => 0, "2" => 0, "3" => 0, "4" => 0, "4+" => 0);

if ($fileReference) {

    while (!feof($fileReference)) {
        $lineRead = fgets($fileReference);
        $arrayLine = explode(",", $lineRead);
        foreach ($arrayLine as $words) {
            $words = trim($words);
            switch (strlen($words)) {
                case 1:
                    $stats["1"]++;
                    break;
                case 2:
                    $stats["2"]++;
                    break;
                case 3:
                    $stats["3"]++;
                    break;
                case 4:
                    $stats["4"]++;
                    break;
                default:
                    $stats["4+"]++;
                    break;
            }
            echo  $words . ": tiene " . strlen($words) . " letras<br>";
        }
    }

    echo "<br>";
    for ($i = 1; $i < 5; $i++) {
        echo "Con $i letra/s hay: " . $stats[strval($i)] . " palabra/s<br>";
    }
    echo "Con mas de 4 letras hay " . $stats["4+"] . " palabra/s<br>";
}

fclose($fileReference);
