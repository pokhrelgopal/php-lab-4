<?php
// Define the interface
interface Animal
{
    public function makeSound();
}

// Implement the interface in classes
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

// Create objects of the classes
$dog = new Dog();
$cat = new Cat();

// Call the method defined in the interface for each object
$dog->makeSound(); // Output: Dog barks: Woof woof!
$cat->makeSound(); // Output: Cat meows: Meow meow!