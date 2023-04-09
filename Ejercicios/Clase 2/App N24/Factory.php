<?php

class Factory
{
    private $_maxNumberOperators;
    private $_operatorsList;
    private $_businessName;

    public function __construct($businessName)
    {
        $this->_maxNumberOperators = 5;
        $this->_businessName = $businessName;
        $this->_operatorsList = array();
    }

    private function ReturnCosts()
    {
        $totalSalary = 0;
        foreach ($this->_operatorsList as $operator) {
            $totalSalary += $operator->GetSalary();
        }
        return $totalSalary;
    }

    public function ShowOperators()
    {
        foreach ($this->_operatorsList as $operator) {
            echo Operator::ShowS($operator);
        }
    }

    public static function ShowCost(Factory $factory)
    {
        echo "Costo total en salarios: " . $factory->ReturnCosts();
    }

    public static function Equals(Factory $factory, Operator $operator)
    {
        return in_array($operator, $factory->_operatorsList) ? true : false;
    }

    public function Add(Operator $operator)
    {
        if (!Factory::Equals($this, $operator) && count($this->_operatorsList) < $this->_maxNumberOperators) {
            array_push($this->_operatorsList, $operator);
            return true;
        }
        return false;
    }

    public function Remove(Operator $operator)
    {
        if (Factory::Equals($this, $operator)) {
            $operatorToDelete = array_search($operator, $this->_operatorsList);
            unset($this->_operatorsList[$operatorToDelete]);
            return true;
        }
        return false;
    }
}
