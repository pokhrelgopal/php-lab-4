<?php
class Car {
    private $make;
    private $model;
    private $year;

    public function setMake($make) {
        $this->make = $make;
    }

    public function getMake() {
        return $this->make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }
}

$car1 = new Car();

$car1->setMake("Toyota");
$car1->setModel("Corolla");
$car1->setYear(2022);

echo "Car Details:<br>";
echo "Make: " . $car1->getMake() . "<br>";
echo "Model: " . $car1->getModel() . "<br>";
echo "Year: " . $car1->getYear() . "<br>";