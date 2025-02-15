<!--TO GET OUTPUT HIT in browser: http://localhost/php-CRUD/phpOOPExample/oopTest.php-->

<?php
require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/ElectricCar.php';


$car = new Car('Toyota', 'Corolla');
$car->startEngine();
$car->accelerate(20);
$car->brake(10);

echo "<br>";

$electricCar = new ElectricCar('Tesla', 'Model S');
$electricCar->startEngine();
$electricCar->accelerate(30);
$electricCar->brake(5);
$electricCar->chargeBattery();
