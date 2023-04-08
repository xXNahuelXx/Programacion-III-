<?php

class Garage
{
    private $_businessName;
    private $_pricePerHour;
    private $_cars;

    public function __construct($businessName = "", $pricePerHour = 1500)
    {
        $this->_businessName = $businessName;
        $this->_pricePerHour = $pricePerHour;
        $this->_cars = array();
    }

    private function MakeCarList()
    {
        $carList = "";
        foreach ($this->_cars as $car) {
            $carList .= $car->GetBrand() . " " . $car->GetColor() . "<br>";
        }
        return $carList;
    }

    public function ShowGarage()
    {
        echo "Razon Social: " . $this->_businessName . "<br>" . "Precio por hora: " . $this->_pricePerHour . "<br>" . "Listado de autos:<br>" . $this->MakeCarList();
    }

    public function Equals(Car $car)
    {
        return in_array($car, $this->_cars) ? true : false;
    }

    public function Add(Car $car)
    {
        if (!$this->Equals($car)) {
            array_push($this->_cars, $car);
            echo "Agregado exitosamente<br>";
        } else {
            echo "Este auto ya existe en el garage<br>";
        }
    }

    public function Remove(Car $car)
    {
        if ($this->Equals($car)) {
            $carToDelete = array_search($car, $this->_cars);
            unset($this->_cars[$carToDelete]);
            echo "Eliminado exitosamente<br>";
        } else {
            echo "No se puede eliminar un auto que no existe<br>";
        }
    }
}
