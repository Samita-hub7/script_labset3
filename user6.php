<?php

class User {
    protected $firstName;
    protected $lastName;
    protected $isAdmin;

    public function __construct($firstName, $lastName, $isAdmin = false) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->isAdmin = $isAdmin;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    public function displayInfo() {
        echo $this->getFullName() . "<br>";
        echo "is_admin: " . ($this->isAdmin ? "true" : "false") . "<br>";
    }
}

class Customer extends User {
    private $location;

    public function __construct($firstName, $lastName, $location) {
        parent::__construct($firstName, $lastName, false);
        $this->location = $location;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Location: " . $this->location . "<br>";
    }
}

class AdminUser extends User {
    public function __construct($firstName, $lastName) {
        parent::__construct($firstName, $lastName, true);
    }

    public function displayInfo() {
        echo $this->getFullName() . " (admin)<br>";
        echo "is_admin: true<br>";
    }
}

// Create objects
$user = new User("Samita", "Gaire");

$customer = new Customer(
    "Sima",
    "Raymajhi",
    "Kathmandu, Bagmati, Nepal"
);

$admin = new AdminUser("Ranjita", "Chhetri");

// Display output
echo "<h2>User</h2>";
$user->displayInfo();

echo "<br><h2>Customer</h2>";
$customer->displayInfo();

echo "<br><h2>Admin User</h2>";
$admin->displayInfo();

?>