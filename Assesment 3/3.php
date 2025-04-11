<?php

class Vehicle {
    private $brand;
    private $model;

    function set_name($vbrand, $vmodel) {
        $this->brand = $vbrand;
        $this->model = $vmodel;
    }

    public function displayinfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
    }
}

class Car extends Vehicle {
    private $fueltype;

    public function set_fueltype($fuel) {
        $this->fueltype = $fuel;
    }

    public function displayinfo() {
        parent::displayinfo();
        echo "FuelType: " . $this->fueltype . "<br>";
    }
}

$obj = new Car();
$obj->set_name("TATA", "Nano");
$obj->set_fueltype("Petrol");
$obj->displayinfo();

?>
