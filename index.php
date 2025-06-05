<?php

declare(strict_types=1);

//require 'src/Models/User.php'; // Задача 1

// Задание 2: Автозагрузка через Composer
// Задание 4: Использование use для сокращения пути


require 'vendor/autoload.php';

use App\Models\User; // используем use для сокращения
use App\Services\UserService; // используем use для сокращения
use App\Models\Order;

$user = new User("Иван");
echo $user->getName() . PHP_EOL;

$service = new UserService();
echo $service->getUserGreeting("Олег") . PHP_EOL;

$order = new Order();
$order->log("Заказ создан");