<?php

class Student {
    public $name;
    public $surname;
    public $country;
    public $tuition;

    public function __construct($name, $surname, $country, $tuition) {
        $this->name = $name;
        $this->surname = $surname;
        $this->country = $country;
        $this->tuition = $tuition;
    }

    public function helloWorld() {
        echo "Hello World<br>";
    }

    public function helloMe() {
        echo "Hello me!<br>";
    }

    public function showPrivateMethod() {
        echo "Hello Family<br>";
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Surname: " . $this->surname . "<br>";
        echo "Country: " . $this->country . "<br>";
        $this->helloWorld();
        $this->helloMe();
        echo "Tuition: " . $this->tuition . "<br>";
    }
}

class PartTimeStudent extends Student {

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Surname: " . $this->surname . "<br>";
        echo "Country: " . $this->country . "<br>";

        $this->helloWorld();
        $this->showPrivateMethod();
        $this->helloMe();

        echo "Tuition: " . $this->tuition . "<br>";
    }
}

// Create Student object
$student1 = new Student("Samita", "Gaire", "Nepal", 60000);

// Create Part Time Student object
$student2 = new PartTimeStudent("Sima", "Raymajhi ", "Nepal", 40000);

echo "<h2>Student</h2>";
$student1->displayInfo();

echo "<br>";

echo "<h2>Part Time Student</h2>";
$student2->displayInfo();

?>