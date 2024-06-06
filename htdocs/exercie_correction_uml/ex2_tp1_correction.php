<?php

// Parent class
class Vehicle {
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function drive() {
        return "The vehicle is being driven.";
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    private $color;

    public function __construct($brand, $model, $year, $color) {
        parent::__construct($brand, $model, $year);
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function honk() {
        return "Beep beep!";
    }
}

// Aggregation: creating a class that has another class as a member
class CarDealer {
    private $cars = [];

    public function addCar(Car $car) {
        $this->cars[] = $car;
    }

    public function getCars() {
        return $this->cars;
    }
}

// Create some cars
$car1 = new Car("Toyota", "Corolla", 2018, "Blue");
$car2 = new Car("Honda", "Civic", 2020, "Red");

// Test inheritance
echo "Car 1: " . $car1->getBrand() . " " . $car1->getModel() . ", Year: " . $car1->getYear() . ", Color: " . $car1->getColor() . "\n";
echo "Car 2: " . $car2->getBrand() . " " . $car2->getModel() . ", Year: " . $car2->getYear() . ", Color: " . $car2->getColor() . "\n";

// Test aggregation
$dealer = new CarDealer();
$dealer->addCar($car1);
$dealer->addCar($car2);

echo "Cars in the dealership:\n";
foreach ($dealer->getCars() as $car) {
    echo $car->getBrand() . " " . $car->getModel() . ", Year: " . $car->getYear() . ", Color: " . $car->getColor() . "\n";
}
