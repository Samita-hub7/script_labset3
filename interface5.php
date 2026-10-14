<?php

class Address {
    public $street;
    public $number;
    public $city;

    public function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    public function getAddress() {
        return "street " . $this->street .
               ", number " . $this->number .
               ", city " . $this->city;
    }
}

class Phone {
    public $countryCode;
    public $number;

    public function __construct($countryCode, $number) {
        $this->countryCode = $countryCode;
        $this->number = $number;
    }

    public function getPhone() {
        return $this->countryCode . " / " . $this->number;
    }
}

class User {
    public $firstName;
    public $lastName;
    public $address;
    public $phone;

    public function __construct($firstName, $lastName, $address, $phone) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getInfo() {
        echo "User: " . $this->firstName . " " .
             $this->lastName . "<br>";

        echo "Address: " . $this->address->getAddress() . "<br>";

        echo "Number: " . $this->phone->getPhone();
    }
}

// Create objects
$address = new Address("Main Street", 20, "Kathmandu");

$phone = new Phone("+977", "9876543210");

$user = new User("Samita", "Gaire", $address, $phone);

// Display information
$user->getInfo();

?>