<?php

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'initiation-POO-2/Car.php';
require_once 'initiation-POO-2/Bicycle.php';
require_once 'initiation-POO-2/Truck.php';
require_once 'initiation-POO-2/Bike.php';
require_once 'initiation-POO-2/Skateboard.php';

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$car = new Car('bleu', 3, "fuel");
$bike = new Bike('black', 1);
$skate = new Skateboard('orange', 0);

$motorWay->addVehicle($car);
$motorWay->addVehicle($bike);
$motorWay->addVehicle($skate);
var_dump($motorWay);

$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($skate);
var_dump($pedestrianWay);

$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($skate);
var_dump($residentialWay);