<?php

class Rectangle extends GeometricFigure
{
    private float $_sideOne;
    private float $_sideTwo;

    public function __construct($sideOne, $sideTwo)
    {
        $this->_sideOne = $sideOne;
        $this->_sideTwo = $sideTwo;
        parent::__construct();
        $this->CalculateData();
    }

    protected function CalculateData()
    {
        $this->_surface = $this->_sideOne * $this->_sideTwo;
        $this->_perimeter = 2 * ($this->_sideOne + $this->_sideTwo);
    }

    public function Draw()
    {
        for ($i = 1; $i <= $this->_sideTwo; $i++) {
            for ($j = 1; $j <= $this->_sideOne; $j++) {
                echo "<span style='color: " . parent::GetColor() . "'>" . '*' . "</span>";
            }
            echo "<br>";
        }
    }
}
