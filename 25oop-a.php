<?php
class Person {
    private $name;
    private $address;
    private $occupation;

    public function __construct($name, $address, $occupation) {
        $this->name = $name;
        $this->address = $address;
        $this->occupation = $occupation;
    }
    public function displayDetails() {
        echo "Name: " . $this->name . "<br>";
        echo "Address: " . $this->address . "<br>";
        echo "Occupation: " . $this->occupation . "<br>";
    }
    public function updateName($newName) {
        $this->name = $newName;
    }
    public function updateAddress($newAddress) {
        $this->address = $newAddress;
    }
    public function updateOccupation($newOccupation) {
        $this->occupation = $newOccupation;
    }
}

$person1 = new Person("Ram Shrestha", "Kathmandu", "Teacher");
$person2 = new Person("Shyam Thapa", "Pokhara", "Lawyer");

echo "Person 1 initial details:<br>";
$person1->displayDetails();

echo "Person 2 initial details:<br>";
$person2->displayDetails();

$person1->updateName("Hari Sharma");
$person1->updateAddress("Bhaktapur");
$person1->updateOccupation("Engineer");

$person2->updateName("Gita Magar");
$person2->updateAddress("Butwal");
$person2->updateOccupation("Doctor");

echo "Person 1 updated details:<br>";
$person1->displayDetails();

echo "Person 2 updated details:<br>";
$person2->displayDetails();
