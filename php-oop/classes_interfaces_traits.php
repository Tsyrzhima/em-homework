<?php

declare(strict_types=1);

// Интерфейс

interface Movable
{
    public function move(): string;
}

// Трейт

trait Loggable
{
    public function log($message): void
    {
        echo "LOG: {$message}" . PHP_EOL;
    }
}


// Задание 1: Создание класса и объектов
class Car implements Movable
{
    use Loggable;
    private string $brand;
    private string $model;
    private int $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo(): string
    {
        return "{$this->brand} {$this->model}, {$this->year}";
    }

// Задание 2: Использование инкапсуляции (геттеры и сеттеры)

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }
    public function move(): string
    {
        return "Машина едет";
    }

}

$car = new Car("Toyota", "Camry", 2020);
echo $car->getCarInfo() . PHP_EOL;

$car->setYear(2022);
echo $car->getYear() . PHP_EOL;

// Задание 3: Наследование классов

class ElectricCar extends Car
{
    private $batteryCapacity;
    public function __construct(string $brand, string $model, int $year, int $batteryCapacity)
    {
        parent::__construct($brand, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }
    public function getBatteryInfo(): string
    {
        return "Батарея: {$this->batteryCapacity} kWh";
    }
}

$tesla = new ElectricCar("Tesla", "Model S", 2021, 100);
echo $tesla->getBatteryInfo() . PHP_EOL;

// Задание 4: Реализация интерфейса
class Bicycle implements Movable
{
    public function move(): string
    {
        return "Велосипед движется";
    }
}

echo $car->move() . PHP_EOL;

$bike = new Bicycle();
echo $bike->move() . PHP_EOL;

// Задание 5: Использование трейтов

$car->log("Запущен двигатель");
