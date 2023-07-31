<?php
interface Shape
{
    public function draw();
}

interface Color
{
    public function getColor();
}

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

$circle = new Circle();
$circle->draw();
$circle->getColor();
