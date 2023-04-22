<?php

/*Enviar (por POST) a la página nexo.php:
*-accion => 'agregar'
*-nombre => 'su nombre'
*-apellido => 'su apellido'
*-legajo => 'su legajo'

Recuperar los valores enviados y agregarlos al archivo ./archivos/alumnos.txt
El formato que deberá tener cada registro es el siguiente:
legajo - apellido - nombre

Indicar si se pudo o no guardar al alumno*/

include_once "./Student.php";

$action = isset($_POST["action"]) ? $_POST["action"] : "";
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
$file = isset($_POST["file"]) ? (int) $_POST["file"] : 0;

switch($action)
{
    case "Add":
        $student = new Student($name,$lastName,$file);
        echo Student::Add($student) ? "<h2> Alumno agregado al registro exitosamente</h2><br>" : "No se pudo agregar<br>";
        break;

    case "List":
        echo Student::List();
        break;
    case "Verify":
        Student::Verify($file);
        break;
    case "Modify":
        $student = new Student($name,$lastName,$file);
        Student::Modify($student);
        break;
    case "Delete":
        Student::Delete($file);
        break;
}
?>