<?php

class Animal
{
    public function sound()
    {
        echo "Animal makes a sound<br>";
    }
}

class Dog extends Animal
{
    public function sound()
    {
        echo "Dog barks<br>";
    }
}

class Vehicle
{
    public function fuel()
    {
        echo "Vehicle runs on fuel<br>";
    }
}

class Car extends Vehicle
{
    public function fuel()
    {
        echo "Car runs on petrol<br>";
    }
}

class Sedan extends Car
{
    public function fuel()
    {
        echo "Sedan runs on diesel<br>";
    }
}

class Shape
{
    public function draw()
    {
        echo "Drawing a shape<br>";
    }
}

class Circle extends Shape
{
    public function draw()
    {
        echo "Drawing a circle<br>";
    }
}

class Square extends Shape
{
    public function draw()
    {
        echo "Drawing a square<br>";
    }
}

$dog = new Dog();
$sedan = new Sedan();
$circle = new Circle();
$square = new Square();

$dog->sound();
$sedan->fuel();
$circle->draw();
$square->draw();
