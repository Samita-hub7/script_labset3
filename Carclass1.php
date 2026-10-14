<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function start() {
        echo "Car started.<br>";
    }

    public function stopEngine() {
        echo "Car engine stopped.<br>";
    }

    public function displayInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }

    public function getDescription() {
        return "This is a " . $this->year . " " .
               $this->make . " " . $this->model . ".";
    }
}

class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Electric car is charging.<br>";
    }

    public function getDescription() {
        return "This is an electric " . $this->getYear() .
               " " . $this->getMake() . " " .
               $this->getModel() . " with a " .
               $this->batteryCapacity . " kWh battery.";
    }
}

// Normal Car
$car = new Car("Toyota", "Corolla", 2022);

echo "<h2>Car Information</h2>";
$car->start();
$car->displayInfo();
echo "Description: " . $car->getDescription() . "<br>";
$car->stopEngine();

// Electric Car
$electricCar = new ElectricCar("Tesla", "Model 3", 2024, 75);

echo "<h2>Electric Car Information</h2>";
$electricCar->start();
$electricCar->displayInfo();
echo "Battery Capacity: 75 kWh<br>";
$electricCar->charge();
echo "Description: " . $electricCar->getDescription() . "<br>";
$electricCar->start();
$electricCar->stopEngine();

?>