<?php
require_once __DIR__ . '/Vehicle.php';

class Car extends Vehicle
{

    // Override abstract method from Vehicle class (This is an inheritance example)
    public function startEngine()
    {
        echo "Starting the engine of {$this->getMake()} {$this->getModel()}.<br>";
    }

    // Example of polymorphism: Overriding accelerate method
    public function accelerate($speedLength)
    {
        parent::accelerate($speedLength); // Call the parent method
        echo "This car is now accelerating.<br>";
    }
}
