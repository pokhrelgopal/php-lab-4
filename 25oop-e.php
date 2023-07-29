<?php
class Person {
    private static $totalPersons = 0;
    private $name;

    public function __construct($name) {
        $this->name = $name;
        self::$totalPersons++;
    }

    public static function getTotalPersons() {
        return self::$totalPersons;
    }

    public function sayHello() {
        echo "Hello, my name is $this->name.<br>";
    }
}

$ram = new Person("Ram");
$shyam = new Person("Shyam");

$ram->sayHello();
$shyam->sayHello();

echo "Total persons created: " . Person::getTotalPersons() . "<br>";