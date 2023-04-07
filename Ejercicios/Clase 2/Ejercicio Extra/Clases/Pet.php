<?php

namespace LittleAnimals;

class Pet
{
    public string $_name;
    public string $_race;
    public int $_age;

    public function __construct($name, $race, $age = 0)
    {
        $this->_name = $name;
        $this->_race = $race;
        $this->_age = $age;
    }

    public static function Show(Pet $pet)
    {
        return "Nombre: $pet->_name<br>Raza: $pet->_race<br>Edad: $pet->_age<br>";
    }

    public function equals(Pet $pet)
    {
        return $pet instanceof Pet && $this->_name === $pet->_name && $this->_race === $pet->_race ? true : false;
    }

    public function __toString()
    {
        return " " . $this->_name . " " . $this->_race . " " . $this->_age . "<br>";
    }
}
