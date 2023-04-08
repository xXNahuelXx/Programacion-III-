<?php

/*Dadas las siguientes clases:
Pasajero
Atributos privados: _apellido (string), _nombre (string), _dni (string), _esPlus (boolean)
Crear un constructor capaz de recibir los cuatro parámetros.
Crear el método de instancia “Equals” que permita comparar dos objetos Pasajero. Retornará 
TRUE cuando los _dni sean iguales.
Agregar un método getter llamado GetInfoPasajero, que retornará una cadena de caracteres con los
atributos concatenados del objeto.
Agregar un método de clase llamado MostrarPasajero que mostrará los atributos en la página.
Vuelo
Atributos privados: _fecha (DateTime), _empresa (string) _precio (double), _listaDePasajeros 
(array de tipo Pasajero), _cantMaxima (int; con su getter). Tanto _listaDePasajero como 
_cantMaxima sólo se inicializarán en el constructor. 
Crear el constructor capaz de que de poder instanciar objetos pasándole como parámetros:
i. La empresa y el precio.
ii. La empresa, el precio y la cantidad máxima de pasajeros.
Agregar un método getter, que devuelva en una cadena de caracteres toda la información de un 
vuelo: fecha, empresa, precio, cantidad máxima de pasajeros, y toda la información de todos los 
pasajeros.
Crear un método de instancia llamado AgregarPasajero, en el caso que no exista en la lista, se 
agregará (utilizar Equals). Además tener en cuenta la capacidad del vuelo. El valor de retorno de 
este método indicará si se agregó o no.
Agregar un método de instancia llamado MostrarVuelo, que mostrará la información de un vuelo.
Crear el método de clase “Add” para que permita sumar dos vuelos. El valor devuelto deberá ser de
tipo numérico, y representará el valor recaudado por los vuelos. Tener en cuenta que si un pasajero 
es Plus, se le hará un descuento del 20% en el precio del vuelo.
Crear el método de clase “Remove”, que permite quitar un pasajero de un vuelo, siempre y cuando
el pasajero esté en dicho vuelo, caso contrario, informarlo. El método retornará un objeto de tipo 
Vuelo.*/

require_once "./Passenger.php";
require_once "./Flight.php";

$passengerOne = new Passenger("Ghigliotti", "Nahuel", "41205648", true);
$passengerTwo = new Passenger("Tilbes", "Antonella", "41056120", true);
$passengerThree = new Passenger("Soria", "Veronica", "41026881", true);
$passengerFour = new Passenger("Barboza", "Eliana", "42564589", true);
$passengerFive = new Passenger("Paz", "Erika", "12458658", false);
$passengerSix = new Passenger("Gonzalez", "Diego", "12451568", false);
$passengerSeven = new Passenger("Aguirre", "Micaela", "12412565", false);
$passengerEight = new Passenger("Muñoz", "Mario", "12451256", false);
$passengerNine = new Passenger("Angelotti", "Alfredo", "41254126", false);
$passengerTen = new Passenger("Messina", "Franco", "15246512", false);

//Pruebo 2 pasajeros con distintos id
echo $passengerOne->Equals($passengerTwo) ?  "Son iguales<br>" : "No son iguales<br>";
//Pruebo 2 pasajeros con mismo id
echo $passengerOne->Equals($passengerThree) ?  "Son iguales<br>" : "No son iguales<br>";
//Muestro datos del pasajero
echo $passengerOne->ShowPassenger();
//Creo 2 vuelos
$flightOne = new Flight("Aerolineas Argentinas", 25000, 10);
$flightTwo = new Flight("Aerolineas Argentinas", 30000, 5);
//Agrego 5 pasajeros 2 plus y 3 normales al vuelo 1
$flightOne->AddPassenger($passengerOne);
$flightOne->AddPassenger($passengerTwo);
$flightOne->AddPassenger($passengerEight);
$flightOne->AddPassenger($passengerNine);
$flightOne->AddPassenger($passengerTen);
//Agrego otros 5 pasajeros al vuelo 2, 3 plus y 2 normales.
$flightTwo->AddPassenger($passengerThree);
$flightTwo->AddPassenger($passengerFour);
$flightTwo->AddPassenger($passengerFive);
$flightTwo->AddPassenger($passengerSix);
$flightTwo->AddPassenger($passengerSeven);
//Muestro datos de vuelo 1
echo $flightOne->ShowFlight();
//Muestro datos de vuelo 2
echo $flightTwo->ShowFlight();
//Muestro la suma recaudada total de los 2 vuelos contemplando los descuentos a los pasajeros plus
echo "Suma recaudada de ambos vuelos: $" . Flight::Add($flightOne, $flightTwo) . "<br>";

//Remuevo un pasajero del vuelo 1 y luego muestro
Flight::Remove($flightOne, $passengerOne);
echo $flightOne->ShowFlight();
//Intento eliminar un pasajero que ya elimine
Flight::Remove($flightOne, $passengerOne);
echo $flightOne->ShowFlight();
