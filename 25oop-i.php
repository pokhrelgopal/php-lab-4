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

// Create objects of the classes
$shape = new Shape();
$circle = new Circle();
$square = new Square();

// Call the draw() method for each object
$shape->draw();   // Output: Drawing a shape.
$circle->draw();  // Output: Drawing a circle.
$square->draw();  // Output: Drawing a square.
