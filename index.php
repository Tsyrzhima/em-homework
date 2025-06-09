<?php

declare(strict_types=1);

//require 'src/Models/User.php'; // Задача 1

// Задание 2: Автозагрузка через Composer
// Задание 4: Использование use для сокращения пути


require 'vendor/autoload.php';

use oop\Models\Order;
use oop\Models\User;
use oop\Services\UserService;

// используем use для сокращения
// используем use для сокращения

$user = new User("Иван");
echo $user->getName() . PHP_EOL;

$service = new UserService();
echo $service->getUserGreeting("Олег") . PHP_EOL;

$order = new Order();
$order->log("Заказ создан");