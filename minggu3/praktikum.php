<?php

class Car {

    //private
    private $model;

    public function getModel()
    {
        return "The car model is" . $this -> model;
    }
}

$mercedes = new Car();

////akses property dari luar class.
$mercedes -> Model = "Mercedes benz";
echo $mercedes -> getModel();

?>