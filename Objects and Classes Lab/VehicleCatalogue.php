<?php

/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 14:26
 */

class Truck
{

    private $brand;
    private $model;
    private $weight;

    /**
     * Truck constructor.
     * @param $brand
     * @param $model
     * @param $weight
     */
    public function __construct(string $brand, string $model, int $weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }


}

class Car
{
    private $brand;
    private $model;
    private $horsePower;

    /**
     * Car constructor.
     * @param $brand
     * @param $model
     * @param $horsePower
     */
    public function __construct(string $brand, string $model, int $horsePower)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getHorsePower(): int
    {
        return $this->horsePower;
    }

}

$cars = [];
$trucks = [];
$isPresetCar = false;
$isPresetTruck = false;
while (true) {
    $input = readline();
    if ($input === "end") {
        break;
    }
    $token = explode("/", $input);
    list($type, $brand, $model, $info) = $token;
    switch ($type) {
        case "Car":
            $car = new Car($brand, $model, $info);
            array_push($cars, $car);
            $isPresetCar = true;
            break;
        case "Truck":
            $truck = new Truck($brand, $model, $info);
            array_push($trucks, $truck);
            $isPresetTruck = true;
            break;
        default:
            break;
    }
}

usort($cars, function (Car $a,Car $b) {
    return ($a->getBrand() <=> $b->getBrand());
});
usort($trucks, function (Truck $a,Truck $b) {
    return ($a->getBrand() <=> $b->getBrand());
});

if ($isPresetCar) {
    echo "Cars:\n";
    foreach ($cars as $vehicle) {
        echo "{$vehicle->getBrand()}: {$vehicle->getModel()} - {$vehicle->getHorsePower()}hp" . PHP_EOL;
    }
}

if ($isPresetTruck) {
    echo "Trucks:\n";
    foreach ($trucks as $vehicle) {
        echo "{$vehicle->getBrand()}: {$vehicle->getModel()} - {$vehicle->getWeight()}kg" . PHP_EOL;
    }
}