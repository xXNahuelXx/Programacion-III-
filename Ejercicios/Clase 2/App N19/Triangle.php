<?php

class Triangle extends GeometricFigure
{
    private float $_heigh;
    private float $_base;

    public function __construct($base, $heigh)
    {
        $this->_heigh = $heigh;
        $this->_base = $base;
    }

    protected function CalculateData()
    {
        $this->_surface = ($this->_base * $this->_heigh) / 2;
    }

    public function Draw()
    {
    }
}
