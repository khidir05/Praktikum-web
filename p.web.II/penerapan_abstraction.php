<?php
abstract class shape {
    abstract public function area();
}

class Rectangle extends shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function area() {
        return $this->width * $this->height;
    }
}

class Circle extends shape {
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function area() {
        return pi() * pow($this->radius,2);
    }
}

$rectanglle = new Rectangle(5, 10);
echo "area of rectangle: " . $rectanglle->area() ;

$circle = new Circle(7);
echo "Area of circle". $circle->area() ;