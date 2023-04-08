<?php

namespace Business;

use LittleAnimals\Pet;

require_once "./Clases/Pet.php";

class Nursery
{
    public string $_name;
    public $_pets;

    public function __construct($name)
    {
        $this->_name = $name;
        $this->_pets = array();
    }

    public static function equals(Nursery $nursery, Pet $pet)
    {
        return in_array($pet, $nursery->_pets) ? true : false;
    }

    public function Add(Pet $pet)
    {
        if (!$this->equals($this, $pet)) {
            array_push($this->_pets, $pet);
            return true;
        }
        return false;
    }

    private function AverageAge()
    {
        $ageAcumulator = 0;
        $petCounter = 0;
        foreach ($this->_pets as $pet) {
            $ageAcumulator += $pet->_age;
            $petCounter++;
        }
        return (float)$ageAcumulator / $petCounter;
    }

    private function MakePetsList()
    {
        $petsList = "";
        foreach ($this->_pets as $pet) {
            $petsList .= "$pet->_name " . "$pet->_race " . "$pet->_age " . "<br>";
        }
        return $petsList;
    }

    public function __toString()
    {
        return "<br>Guardería:" . $this->_name . "<br>Listado de mascotas<br>" . $this->MakePetsList() . "Promedio de edades: " . $this->AverageAge();
    }
}
