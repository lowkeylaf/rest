<?php
class Shape {
    function area() {
        return 0;
    }
}

class Circle extends Shape {
    public $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}

$myCircle = new Circle(5);
echo "Area of the circle: " . $myCircle->area() . "<br>";
?>