<?php

class Passenger
{
    private $_lastName;
    private $_name;
    private $_id;
    private $_isPlus;

    public function __construct($lastName, $name, $id, $isPlus)
    {
        $this->_lastName = $lastName;
        $this->_name = $name;
        $this->_id = $id;
        $this->_isPlus = $isPlus;
    }

    public function GetPlus()
    {
        return $this->_isPlus;
    }

    public function Equals(Passenger $passenger)
    {
        return $this->_id == $passenger->_id ? true : false;
    }

    private function GetPassengerInfo()
    {
        return "Apellido: $this->_lastName<br>Nombre: $this->_name<br>DNI: $this->_id<br>Es plus: $this->_isPlus<br>";
    }

    public function ShowPassenger()
    {
        return $this->GetPassengerInfo();
    }
}
