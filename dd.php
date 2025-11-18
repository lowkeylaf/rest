<?php
$animal = new class("Cat") {
    public $species;

    function __construct($species) {
        $this->species = $species;
    }

    function makeSound() {
        echo "Meow!<br>";
    }
};

$animal->makeSound();
echo "Species: " . $animal->species . "<br>";
?>