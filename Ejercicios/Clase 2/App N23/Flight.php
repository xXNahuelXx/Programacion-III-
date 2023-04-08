<?php

class Flight
{
    private $_date;
    private $_company;
    private $_price;
    private $_passengerslist;
    private $_maximumAmount;

    public function __construct($company, $price, $maximumAmount = 50)
    {
        $this->_company = $company;
        $this->_price = $price;
        $this->_maximumAmount = $maximumAmount;
        $this->_passengerslist = array();
        $this->_date = new DateTime();
    }

    public function FlightInformation()
    {
        $passengerListInfo = "";
        foreach ($this->_passengerslist as $passenger) {
            $passengerListInfo .= $passenger->ShowPassenger() . "<br>";
        }
        return "INFORMACION DE VUELO<br><br>Fecha: " . $this->_date->format('Y-m-d') .
            "<br>Empresa: $this->_company
        <br>Precio: $$this->_price
        <br>Cantidad maxima de pasajeros: $this->_maximumAmount
        <br>Pasajeros:<br>
        $passengerListInfo";
    }

    public function Equals(Passenger $passenger)
    {
        return in_array($passenger, $this->_passengerslist) ? true : false;
    }

    public function AddPassenger(Passenger $passenger)
    {
        if (!$this->Equals($passenger) && count($this->_passengerslist) < $this->_maximumAmount) {
            array_push($this->_passengerslist, $passenger);
            return "Pasajero agregado con exito<br>";
        }
        return "No es posible agregar al pasajero, corroborar si ya existe o si hay espacio disponible<br>";
    }

    public function ShowFlight()
    {
        echo $this->FlightInformation();
    }

    private function TotalPrice()
    {
        $totalPriceWithDiscount = 0;
        $totalPriceWithoutDiscount = 0;
        foreach ($this->_passengerslist as $passenger) {
            if ($passenger->GetPlus()) {
                $totalPriceWithDiscount += $this->_price - ($this->_price * 0.2);
            } else {
                $totalPriceWithoutDiscount += $this->_price;
            }
        }
        return $totalPriceWithDiscount + $totalPriceWithoutDiscount;
    }

    public static function Add(Flight $flightOne, Flight $flightTwo)
    {
        $totalFlightOne = $flightOne->TotalPrice();
        $totalFlightTwo = $flightTwo->TotalPrice();
        return $totalFlightOne + $totalFlightTwo;
    }

    public static function Remove(Flight $flight, Passenger $passenger)
    {
        if ($flight->Equals($passenger)) {
            $passengerToDelete = array_search($passenger, $flight->_passengerslist);
            unset($flight->_passengerslist[$passengerToDelete]);
            echo "Eliminado exitosamente<br>";
        } else {
            echo "No se puede eliminar, el pasajero no existe<br>";
        }
    }
}
