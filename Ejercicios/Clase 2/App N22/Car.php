<?php

class Car
{
    private string $_color;
    private float $_price;
    private string $_brand;
    private $_date;

    public function __construct($brand = "", $color = "", $price = 100000, $date = null)
    {
        $this->_color = $color;
        $this->_price = $price;
        $this->_brand = $brand;
        if ($date == null) {
            $this->_date = new DateTime();
        } else {
            $this->_date = $date;
        }
    }

    public function GetBrand()
    {
        return $this->_brand;
    }

    public function GetColor()
    {
        return $this->_color;
    }

    public function AddTax($tax)
    {
        $this->_price += $tax;
    }

    public static function ShowCar(Car $car)
    {
        echo  "Marca: " . $car->_brand . "<br>" . "Color: " . $car->_color . "<br>" . "Precio: " . $car->_price . "<br>" . "Fecha: " . $car->_date->format('Y-m-d')  . "<br>";
    }

    public function Equals(Car $car)
    {
        return $this->_brand === $car->_brand;
    }

    public static function Add(Car $carOne, Car $carTwo)
    {
        return $carOne->Equals($carTwo) && $carOne->_color === $carTwo->_color ? $carOne->_price + $carTwo->_price : 0;
    }
}
