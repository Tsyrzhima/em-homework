<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

// Задание 1: Регистрация сервиса в DI-контейнере
// Задание 2: Внедрение зависимостей через контейнер

$container = require __DIR__ . '/container.php';

$userService = $container->get('UserService');

echo "Пользователи:\n\n";
print_r($userService->getAll());