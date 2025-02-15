<?php
require_once __DIR__ .'/Vehicle.php';
class ElectricCar extends Vehicle
{

    // Overriding abstract method
    public function startEngine()
    {
        echo "Starting the electric motor of {$this->getMake()} {$this->getModel()}.<br>";
    }

    // Polymorphism: Different behavior for accelerate in ElectricCar
    public function accelerate($speedLength)
    {
        echo "Electric car is silently accelerating by {$speedLength} km/h.<br>";
        $this->speed += $speedLength;
    }

    // Additional method specific to ElectricCar
    public function chargeBattery()
    {
        echo "Charging the battery of {$this->getMake()} {$this->getModel()}.<br>";
    }
}
