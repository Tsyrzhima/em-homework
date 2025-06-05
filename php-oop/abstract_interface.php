<?php

declare(strict_types=1);

// Задание 1: Абстрактный класс и его наследование
// Задание 2: Использование интерфейса

interface Drawable
{
    public function draw(): void;
}
abstract class Shape
{
    abstract public function getArea(): float;
}

class Rectangle extends Shape implements Drawable
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(): float
    {
        return $this->width * $this->height;
    }
    public function draw(): void
    {
        echo "Рисую прямоугольник шириной {$this->width} и высотой {$this->height}" . PHP_EOL;
    }
}
class Circle extends Shape implements Drawable
{
    private float $radius;
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }
    public function getArea(): float
    {
        return round(pi()*$this->radius ** 2, 2);
    }
    public function draw(): void
    {
        echo "Рисую круг радиусом {$this->radius}" . PHP_EOL;
    }
}

$rect = new Rectangle(10, 5);
echo $rect->getArea() . PHP_EOL;
$rect->draw();

$circle = new Circle(7);
echo $circle->getArea() . PHP_EOL;
$circle->draw();

// Задание 3: Полиморфизм с интерфейсами

function renderShape(Shape $shape): void
{
    $shape->draw();
    echo "Площадь: " . $shape->getArea() . PHP_EOL;
}

renderShape(new Rectangle(5, 5));
renderShape(new Circle(3));

// Задание 4: Абстрактные классы vs интерфейсы

abstract class Vehicle
{
    abstract public function move(): void;
}

interface Fuelable
{
    public function refuel(): void;
}

class Car extends Vehicle implements Fuelable
{
    public function move(): void
    {
        echo "Машина едет" . PHP_EOL;
    }
    public function refuel(): void
    {
        echo "Машина заправлена" . PHP_EOL;
    }
}

class Bike extends Vehicle
{
    public function move(): void
    {
        echo "Велосипед едет" . PHP_EOL;
    }
}

$car = new Car();
$car->move();
$car->refuel();

$bike = new Bike();
$bike->move();
