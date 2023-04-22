<?php

use JetBrains\PhpStorm\ArrayShape;

class Student
{
    private $_name;
    private $_lastName;
    private $_file;

    public function __construct($name,$lastName,$file)
    {
        $this->_name=$name;
        $this->_lastName=$lastName;
        $this->_file=$file;
    }

    public static function Add(Student $student)
    {
        $studentFile = fopen("./Archivos/Alumnos.txt",'a');
        if(fwrite($studentFile,"{$student->_file}-{$student->_lastName}-{$student->_name}\r\n")){
            fclose($studentFile);
            return true;
        }
        fclose($studentFile);
    }

    public static function List(){
        $studentList="";
        if(file_exists("./Archivos/Alumnos.txt")){
            $studentFile = fopen("./Archivos/Alumnos.txt",'r');
            if($studentFile){
                while(!feof($studentFile)){
                    $studentList .= fgets($studentFile);	
                }
                fclose($studentFile);
            }
            else{
                echo "Error al leer el archivo";
                fclose($studentFile);
            }
            
        }else{
            echo "El archivo no existe";
        }
        
        return $studentList;
    }

    public static function Verify($file){
        $name="";
        $lastName="";
        $found = false;
        if(file_exists("./Archivos/Alumnos.txt")){
            $studentFile = fopen("./Archivos/Alumnos.txt",'r');
            if($studentFile){
                while(!feof($studentFile)){
                    $readLine = fgets($studentFile);
                    $fields = explode('-',$readLine);
                    if($fields[0]==$file)
                    {
                        $name=trim($fields[2]);
                        $lastName=trim($fields[1]);
                        $found = true;
                        break;
                    }
                }
                fclose($studentFile);
                if($found!=false)
                {
                    echo "El alumno $name $lastName con legajo  $file se encuentra en el listado";
                    return true;
                }else{
                    echo "El alumno $name $lastName con legajo  $file no se encuentra en el listado";
                    return false;
                }
            }
            else{
                echo "Error al leer el archivo";
                fclose($studentFile);
            }
            
        }else{
            echo "El archivo no existe";
        }
    }

    public static function Modify(Student $student){
        $arrayData= array();
        $name="";
        $lastName="";
        $file="";
        $cant=0;
        if(Student::Verify($student->_file))
        {
            if(file_exists("./Archivos/Alumnos.txt")){
                $studentFile = fopen("./Archivos/Alumnos.txt",'r');
                if($studentFile){
                    while(!feof($studentFile)){
                        $readLine = fgets($studentFile);
                        $fields = explode('-',$readLine);
                        if($fields[0]!="")
                        {
                            $file=trim($fields[0]);
                            $name=trim($fields[2]);
                            $lastName=trim($fields[1]);
                            if($file == $student->_file){
                                echo "\nSe modificará el alumno {$name} {$lastName}\n";
                                array_push($arrayData,"{$file}-{$student->_lastName}-{$student->_name}\r\n");
                            }else{
                                array_push($arrayData,"{$file}-{$lastName}-{$name}\r\n");
                            }
                        }
                    }
                    fclose($studentFile);
                }
                else{
                    echo "Error al leer el archivo";
                    fclose($studentFile);
                }

                $studentFile=fopen("./Archivos/Alumnos.txt",'w');
                foreach($arrayData as $item){
                    $cant=fwrite($studentFile,$item);
                }
                if($cant>0){
                    echo "Modificado con exito";
                    return true;
                }
                fclose($studentFile);
            }else{
                echo "El archivo no existe";
            }
        }
        return false;
    }

    public static function Delete($file){
        $arrayData= array();
        $name="";
        $lastName="";
        $fileAux="";
        if(Student::Verify($file)){
            if(file_exists("./Archivos/Alumnos.txt")){
                $studentFile = fopen("./Archivos/Alumnos.txt",'r');
                if($studentFile){
                    while(!feof($studentFile)){
                        $readLine = fgets($studentFile);
                        $fields = explode('-',$readLine);
                        if($fields[0]!="")
                        {
                            $fileAux=trim($fields[0]);
                            $name=trim($fields[2]);
                            $lastName=trim($fields[1]);
                            if($fileAux != $file){
                                array_push($arrayData,"{$fileAux}-{$lastName}-{$name}\r\n");
                            }
                        }
                    }
                    fclose($studentFile);
                }
                else{
                    echo "Error al leer el archivo";
                    fclose($studentFile);
                }

                $studentFile=fopen("./Archivos/Alumnos.txt",'w');
                foreach($arrayData as $item){
                    $cant=fwrite($studentFile,$item);
                }
                if($cant>0){
                    echo "\nEliminado con exito";
                    return true;
                }
                fclose($studentFile);
            }else{
                echo "El archivo no existe";
            }
        }
        return false;
    }
}
?>