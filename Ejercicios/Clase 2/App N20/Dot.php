<?php

class Dot
{
    private  $_x;
    private  $_y;

    public function __construct($x, $y)
    {
        $this->_x = $x;
        $this->_y = $y;
    }

    function GetX()
    {
        return $this->_x;
    }

    function GetY()
    {
        return $this->_y;
    }
}
