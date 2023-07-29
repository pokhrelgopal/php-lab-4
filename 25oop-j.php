<?php
// Define the interfaces
interface Shape
{
    public function draw();
}

interface Color
{
    public function getColor();
}

// Implement the interfaces in a class
class Circle implements Shape, Color
{
    public function draw()
    {
        echo "Drawing a circle.<br>";
    }

    public function getColor()
    {
        echo "Circle color: Red.<br>";
    }
}

// Create an object of the class and call the methods from both interfaces
$circle = new Circle();
$circle->draw();   // Output: Drawing a circle.
$circle->getColor();  // Output: Circle color: Red.