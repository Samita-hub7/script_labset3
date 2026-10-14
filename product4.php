<?php

class Product {
    private $description;
    private $quantity;
    private $price;

    public function __construct($description, $quantity, $price) {
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    public function calculateTotalPrice() {
        return $this->quantity * $this->price;
    }
}

// Create product object
$product = new Product("Mobile Phone", 3, 70000);

// Display output
echo "Description: " . $product->getDescription() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Price: " . $product->getPrice() . "<br>";
echo "Total Price: " . $product->calculateTotalPrice();

?>