<?php


class Car
{
    public $color;
    public $type;
}

$myCar = new Car();
$myCar->color = 'red';
$myCar->type = 'sedan';

$yourCar = new Car();
$yourCar->color = 'blue';
$yourCar->type = 'suv';

$cars = array($myCar, $yourCar);

foreach ($cars as $car) {
    echo 'This car sfsdfsdf is a ' . $car->color . ' ' . $car->type . "\n";
}