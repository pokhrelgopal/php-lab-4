<?php
class ParentClass
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo "Parent constructor called. Name: $this->name<br>";
    }

    public function sayHello()
    {
        echo "Hello, I am $this->name from the parent class.<br>";
    }
}

class ChildClass extends ParentClass
{
    public function __construct($name)
    {
        parent::__construct($name);
        echo "Child constructor called. Name: $this->name<br>";
    }

    public function sayHello()
    {
        parent::sayHello();
        echo "Hello, I am $this->name from the child class.<br>";
    }
}

$child = new ChildClass("John");
$child->sayHello();
