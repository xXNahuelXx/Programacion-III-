<?php

abstract class GeometricFigure
{
    protected  $_color;
    protected  $_perimeter;
    protected  $_surface;

    public function __construct()
    {
    }

    protected abstract function CalculateData();
    public abstract function Draw();

    public function GetColor()
    {
        return $this->_color;
    }

    public function SetColor(string $color): void
    {
        $this->_color = $color;
    }

    public function __toString()
    {
        return "Color: " . $this->_color . "<br>Superficie: " . $this->_surface . "<br>Perimetro: " . $this->_perimeter . "<br>";
    }
}
