<?php
abstract class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getArea();

    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Square extends Shape
{
    private $side;

    public function __construct($name, $side)
    {
        parent::__construct($name);
        $this->side = $side;
    }

    public function getArea()
    {
        return $this->side * $this->side;
    }
}

$circle = new Circle("Circle", 5);
$square = new Square("Square", 4);

echo "Area of " . $circle->getName() . ": " . $circle->getArea() . "<br>";
echo "Area of " . $square->getName() . ": " . $square->getArea() . "<br>";
