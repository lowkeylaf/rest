<?php
class Vehicle {
    public $make;
    public $model;

    function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    function displayInfo() {
        echo "Make: " . $this->make . ", Model: " . $this->model . "<br>";
    }
}

class Car extends Vehicle {
    public $numberOfDoors;

    function __construct($make, $model, $numberOfDoors) {
        parent::__construct($make, $model);
        $this->numberOfDoors = $numberOfDoors;
    }

    function displayInfo() {
        parent::displayInfo();
        echo "Number of doors: " . $this->numberOfDoors . "<br>";
    }
}

$myCar = new Car("Toyota", "Camry", 4);
$myCar->displayInfo();
?>