<?php
class Shape {
    public function draw() {
        echo "Drawing a shape.<br>";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing a circle.<br>";
    }
}

class Square extends Shape {
    public function draw() {
        echo "Drawing a square.<br>";
    }
}

$shape = new Shape();
$circle = new Circle();
$square = new Square();

$shape->draw(); 
$circle->draw();
$square->draw();