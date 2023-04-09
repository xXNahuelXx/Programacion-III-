<?php

/*Métodos getters y setters (en Operario): 
GetSalario: Sólo retorna el salario del operario. 
SetAumentarSalario: Sólo permite asignar un nuevo salario al operario. La asignación consiste en 
incrementar el salario de acuerdo al porcentaje que recibe como parámetro. 
Constructores: realizar los constructores para cada clase (Fabrica y Operario) con los parámetros 
que se detallan en la imagen.
En la clase Fabrica, la cantidad máxima de operarios será inicializada en 5. 
Métodos (en Operario) 
GetNombreApellido (de instancia): Retorna un String que tiene concatenado el nombre y el 
apellido del operario separado por una coma. 
Mostrar (de instancia): Retorna un String con toda la información del operario. Utilizar el método 
GetNombreApellido. 
Mostrar (de clase): Recibe un operario y retorna un String con toda la información del mismo 
(utilizar el método Mostrar de instancia) 
Crear el método de instancia “Equals” que permita comparar al objeto actual con otro de tipo 
Operario. Retronará un booleano informando si el nombre, apellido y el legajo de los operarios 
coinciden al mismo tiempo.
Métodos (en Fabrica) 
RetornarCostos (de instancia, privado): Retorna el dinero que la fábrica tiene que gastar en 
concepto de salario de todos sus operarios. 
MostrarOperarios (de instancia, privado): Recorre el Array de operarios de la fábrica y muestra el 
nombre, apellido y el salario de cada operario (utilizar el método Mostrar de operario). 
MostrarCosto (de clase): muestra la cantidad total del costo de la fábrica en concepto de salarios 
(utilizar el método RetornarCostos). 
Crear el método de clase “Equals”, recibe una Fabrica y un Operario. Retronará un booleano 
informando si el operario se encuentra en la fábrica o no. Reutilizar código. 
Add (de instancia): Agrega un operario al Array de tipo Operario, siempre y cuando haya lugar 
disponible en la fábrica y el operario no se encuentre ya ingresado. Reutilizar código. Retorna TRUE 
si pudo ingresar al operario, FALSE, caso contrario.
Remove (de instancia): Recibe a un objeto de tipo Operario y lo saca de la fábrica, siempre y 
cuando el operario se encuentre en el Array de tipo Operario. Retorna TRUE si pudo quitar al 
operario, FALSE, caso contrario.
Crear los objetos necesarios en testFabrica.php como para probar el buen funcionamiento de las 
clases.*/

require_once "./Operator.php";
require_once "./Factory.php";


$operatorOne = new Operator("Hetfield", "James", 156235, 120000);
$operatorTwo = new Operator("Halford", "Rob", 175164, 200000);
$operatorThree = new Operator("Dio", "Ronnie", 134858, 450000);
$operatorFour = new Operator("Hetfield", "James", 156235, 325000);
$operatorFive = new Operator("Turunen", "Tarja", 422565, 500000);
$operatorSix = new Operator("Mick", "Jagger", 422559, 800000);

//Muestro los datos de instancia 
echo $operatorOne->ShowI() . "<br>";
echo $operatorTwo->ShowI() . "<br>";
echo $operatorThree->ShowI() . "<br>";

//Muestro los datos estaticos
echo Operator::ShowS($operatorOne) . "<br>";
echo Operator::ShowS($operatorTwo) . "<br>";
echo Operator::ShowS($operatorThree) . "<br>";

//Pruebo el metodo equals con operarios iguales
echo $operatorOne->Equals($operatorFour) ? "Son iguales<br>" : "No son iguales<br>";

//Pruebo el metodo equals con operarios distintos
echo $operatorOne->Equals($operatorThree) ? "Son iguales<br>" : "No son iguales<br>";

//Obtengo el salario
echo "<br>Salario normal: $" . $operatorTwo->GetSalary() . "<br>";

//Le seteo un aumento del 35%, para el valor 200000 serian 70000 = 270000 luego muestro
$operatorTwo->SetIncreaseSalary(35);
echo "Salario con aumento: $" . $operatorTwo->GetSalary() . "<br>";

$factory = new Factory("Alenex");

//Agrego 3 operarios a la fabrica
$factory->Add($operatorOne);
$factory->Add($operatorTwo);
$factory->Add($operatorThree);

//Muestro los costos de la fabrica, en total el resultado deberia ser 840000
Factory::ShowCost($factory);

//Intento agregar un operario que ya existe en la fabrica
echo $factory->Add($operatorOne) ? "<br>Se agrego con exito<br>" : "<br>No se pudo agregar<br>";
//Agrego 2 mas
echo $factory->Add($operatorFour) ? "<br>Se agrego con exito<br>" : "<br>No se pudo agregar<br>";
echo $factory->Add($operatorFive) ? "<br>Se agrego con exito<br>" : "<br>No se pudo agregar<br>";
//Este ya no me deberia dejar porque el cantidad maxima esta seteada en 5
echo $factory->Add($operatorSix) ? "<br>Se agrego con exito<br>" : "<br>No se pudo agregar<br>";

//Muestro lista de operarios de la fabrica, remuevo uno y vuelvo a mostrar
echo "<br>";
$factory->ShowOperators();
echo "<br>";
$factory->Remove($operatorTwo);
$factory->ShowOperators();
