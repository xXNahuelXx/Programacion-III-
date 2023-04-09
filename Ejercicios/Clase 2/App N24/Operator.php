<?php

class Operator
{
    private $_lastName;
    private $_name;
    private $_file;
    private $_salary;

    public function __construct($lastName, $name, $file, $salary)
    {
        $this->_lastName = $lastName;
        $this->_name = $name;
        $this->_file = $file;
        $this->_salary = $salary;
    }

    public function GetSalary()
    {
        return $this->_salary;
    }

    public function SetIncreaseSalary($increase)
    {
        $this->_salary += $this->_salary * ($increase / 100);
    }

    public function GetNameAndLastName()
    {
        return $this->_name . ", " . $this->_lastName;
    }

    public function ShowI()
    {
        return "Operario: " . $this->GetNameAndLastName() . "<br>Legajo: $this->_file<br>Salario: $$this->_salary<br>";
    }

    public static function ShowS(Operator $operator)
    {
        return $operator->ShowI();
    }

    public function Equals(Operator $operator)
    {
        return $this->_name == $operator->_name && $this->_lastName == $operator->_lastName && $this->_file == $operator->_file ? true : false;
    }
}
