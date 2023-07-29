<?php
class Animal
{
    public function makeSound()
    {
        echo "Animal makes a generic sound.<br>";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Dog barks: Woof woof!<br>";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Cat meows: Meow meow!<br>";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->makeSound();
$cat->makeSound();
