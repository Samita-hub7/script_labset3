<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight;

    public function __construct($brand, $model, $year, $description, $weight) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->description = $description;
        $this->weight = $weight;
    }

    public function getInformation() {
        return $this->brand . " " . $this->model .
               " (" . $this->year . ")";
    }

    public function getWeightInGrams() {
        return $this->weight * 1000;
    }

    public function displayInfo($number) {
        echo "<h2>Bicycle " . $number . "</h2>";

        echo "Information: " . $this->getInformation() . "<br>";
        echo "Description: " . $this->description . "<br>";
        echo "Weight in kilograms: " . $this->weight . " kg<br>";
        echo "Weight in grams: " . $this->getWeightInGrams() . " grams<br><br>";
    }
}

// Create Bicycle objects
$bicycle1 = new Bicycle("Giant", "Escape 3", 2023, "Mountain bicycle", 12);

$bicycle2 = new Bicycle("Trek", "Marlin 5", 2024, "Sports bicycle", 14);

// Display information
$bicycle1->displayInfo(1);
$bicycle2->displayInfo(2);

?>