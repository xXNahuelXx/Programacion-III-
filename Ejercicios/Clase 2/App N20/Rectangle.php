<?php

include_once "./Dot.php";

class Rectangle
{
    private Dot $_vertex1;
    private Dot $_vertex2;
    private Dot $_vertex3;
    private Dot $_vertex4;
    public int $sideOne;
    public int $sideTwo;
    public float $area;
    public float $perimeter;

    public function __construct(Dot $vertex1, $vertex3)
    {
        $this->_vertex1 = $vertex1;
        $this->_vertex3 = $vertex3;
        $this->_vertex2 = new Dot($vertex3->GetX(), $vertex1->GetY());
        $this->_vertex4 = new Dot($vertex1->GetX(), $vertex3->GetY());
        $this->sideOne = ($vertex3->GetX() - $vertex1->GetY());
        $this->sideTwo = ($vertex3->GetX() - $vertex1->GetY());
        $this->area = $this->sideOne * $this->sideTwo;
        $this->perimeter = 2 * ($this->sideOne + $this->sideTwo);
    }

    public function GetVertex1()
    {
        return $this->_vertex1;
    }

    public function GetVertex2()
    {
        return $this->_vertex2;
    }

    public function GetVertex3()
    {
        return $this->_vertex3;
    }

    public function GetVertex4()
    {
        return $this->_vertex4;
    }

    public function GetSideOne()
    {
        return $this->sideOne;
    }

    public function GetSideTwo()
    {
        return $this->sideTwo;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function GetPerimeter()
    {
        return $this->perimeter;
    }

    public function Draw()
    {
        $output = '';
        for ($i = 0; $i < $this->sideTwo; $i++) {
            for ($j = 0; $j < $this->sideOne; $j++) {
                $output .= '*';
            }
            $output .= "<br>";
        }
        echo $output;
    }
}
