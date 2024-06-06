<?php
    class Vehicule {
        protected string $brand;
        protected string $model;
        protected int $year;

        public function __construct(string $brand, string $model, int $year) {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }

        public function getBrand() : string {
            return $this->brand;
        }

        public function getModel() : string {
            return $this->model;
        }

        public function getYear() : int {
            return $this->year;
        }

        public function setBrand(string $brand) : void {
            $this->brand = $brand;
        }

        public function setModel(string $model) : void {
            $this->model = $model;
        }

        public function setYear(int $year) : void {
            $this->year = $year;
        }

        public function drive() {
            echo "Je conduis";
        }

        public function printVehicule() : void {
            echo $this->brand . " " . $this->model . " " . $this->year . " ";
        }
    }

    class Car extends Vehicule {
        private string $color;

        public function __construct(string $brand, string $model, int $year, string $color) {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
            $this->color = $color;
        }

        public function getColor() : string {
            return $this->color;
        }

        public function setColor(string $color) : void {
            $this->color = $color;
        }

        public function honk() : void {
            echo "Je klaxonne";
        }

        public function printVehicule() : void {
            echo $this->brand . " " . $this->model . " " . $this->year . " " . $this->color . " ";
        }
    }

    class CarDealer {
        private array $cars;

        public function __construct() {
            $this->cars = [];
        }

        public function addCar(Car $car) : void {
            array_push($this->cars, $car);
        }

        public function getCars() : array {
            return $this->cars;
        }

        public function printCars() : void {
            foreach ($this->cars as $car) {
                $car->printVehicule();
            }
        }
    }

    $car1 = new Car("Peugeot", "V", 2020, "Bleu");

    $carDealer = new CarDealer();
    $carDealer->addCar($car1);
    $carDealer->printCars();
?>