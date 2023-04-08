<?php


use LittleAnimals\Pet;
use Business\Nursery;

require_once "./Clases/Pet.php";
require_once "./Clases/Nursery.php";

$petOne = new Pet("Sindy", "Poodle");
$petTwo = new Pet("Sindy", "Yorkshire");

$petThree = new Pet("Sascha", "Poodle", 5);
$petFour = new Pet("Sascha", "Poodle", 3);

echo "MASCOTA 1<br>" . Pet::Show($petOne);
echo "<br>";
echo "MASCOTA 2<br>" . $petTwo->__toString();
echo "<br>";
echo $petOne->equals($petTwo);

echo "MASCOTA 3<br>" . Pet::Show($petThree);
echo "<br>";
echo "MASCOTA 4<br>" . $petFour->__toString();
echo "<br>";

echo $petThree->equals($petFour) ? "Mascota 3 y 4 SON iguales<br>" : "Mascota 3 y 4 NO son iguales<br>";
echo $petOne->equals($petThree) ? "Mascota 1 y 3 SON iguales<br>" : "Mascota 1 y 3 NO son iguales<br>";

$nursery = new Nursery("La guarderia de Pancho");
$nursery->Add($petOne);
$nursery->Add($petTwo);
$nursery->Add($petThree);
$nursery->Add($petFour);

echo $nursery->__toString();
