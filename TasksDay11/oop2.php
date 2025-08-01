<?php
class Vehicle {
    public $make = "Toyota";
    public $model = "Corolla";
    public function info() {
        echo "Make: " . $this->make . ", Model: " . $this->model;
    }
}
class Car extends Vehicle {
    public $fuelType = "Petrol";

    public function info() {
        parent::info();
        echo ", Fuel Type: " . $this->fuelType;
    }
}
$car = new Car();
$car->info();
?>