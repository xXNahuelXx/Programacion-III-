<?php
/*Se quiere realizar una aplicación que lea un archivo (../misArchivos/palabras.txt) y ofrezca 
estadísticas sobre cuantas palabras de 1, 2, 3, 4 y más de 4 letras hay en el texto. No tener en 
cuenta los espacios en blanco ni saltos de líneas como palabras. Los resultados mostrarlos en una tabla.*/

$pathFile = "./Mis Archivos/palabras.txt";
$fileReference = fopen($pathFile, 'r');
$stats = array("1" => 0, "2" => 0, "3" => 0, "4" => 0, "4+" => 0);
$wordList = array();

if ($fileReference) {

    while (!feof($fileReference)) {
        $lineRead = fgets($fileReference);
        $arrayLine = explode(",", $lineRead);
        foreach ($arrayLine as $words) {
            $words = trim($words);
            array_push($wordList, $words);
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


    ApplyStyles();

    echo "<br>";
    echo "<table>
        <thead>
            <th>Palabra<th>
            <th>Cantidad de letras<th>
        </thead>";

    foreach ($wordList as $word) {
        echo "<tr>
                <td> $word </td>
                <td> " . strlen($word) . " </td>
            </tr>";
    }

    /*for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        echo "<td> " . $wordList[$i] . "</td>";
        //echo "<td> " . $stats[strval($i)] . "</td>";
        echo "<td> " . strlen($words) . "</td>";
        echo "</tr>";
    }*/
    echo  "</table>";
    echo "Con mas de 4 letras hay " . $stats["4+"] . " palabra/s<br>";
}

fclose($fileReference);

function ApplyStyles()
{
    echo "<style>
    table,
    th,
    td{
    border: 1px solid black;
    border-collapse: collapse;
    }

    td{
        padding: 5px 10px;
        height: 100px;
        width: 200px;
    } 
    </style>";
}
