<?php
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Dog barks: Woof woof!<br>";
    }
}

class Cat implements Animal
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
