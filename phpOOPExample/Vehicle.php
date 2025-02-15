<?php

abstract class Vehicle
{

    private $make;
    private $model;
    protected $speed = 0;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    // Abstract method to be implemented in subclasses
    abstract public function startEngine();


    public function getMake()
    {//getter
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }

    // Encapsulated method to increase speed
    public function accelerate($speedLength)
    {
        $this->speed += $speedLength;
        echo "Speed increased to {$this->speed} km/h.<br>";
    }

    // Encapsulated method to apply brake
    public function brake($speedLength)
    {
        $this->speed -= $speedLength;
        if ($this->speed < 0) $this->speed = 0;
        echo "Speed decreased to {$this->speed} km/h.<br>";
    }
}


?>
