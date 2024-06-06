<?php
class Car {
    private $name;
    private $model;
    private $year;
    private $price;

    public function printCarInfo() {
        echo $this->name . " " . $this->model . " " . $this->year . " " . $this->price . "\n";
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function __construct($name, $model, $year, $price) {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }
}

// Usage
$car = new Car("Clio", 'V', 2019, 19000);
        $car->printCarInfo();
        $car->setPrice(17000);
        $car->printCarInfo();
?>
