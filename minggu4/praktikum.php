<?php
//The parent class
class Car {
    // Private property inside the class
    private $model;

    //public setter method
    public function setModel ($model)
    {
        $this -> model = $model;
    }

    public function hello()
    {
        return "beep! i am a <i>" . $this -> model . "</i><br />";
    }
}

//this child class inherits the code from the parent class
class SportsCar extends Car {
    //no code in the chid class
}

//create an instance from thechild class
$sportsCarl = new SportsCar();

//set the value of the class' property.
//for this aim, we use a method that we created in the parent
$sportsCarl -> setModel('Mercedes benz');

//use another method that the child class inherited from the parent class
echo $sportsCarl -> hello();
?>