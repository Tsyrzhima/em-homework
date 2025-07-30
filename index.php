<?php

declare(strict_types=1);

// Задание 5: Тестирование API (интеграционные тесты)

$users = [
    ['firstname' => 'Ivan', 'lastname' => 'Ivanov'],
    ['firstname' => 'Petr', 'lastname' => 'Petrov']
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

header('Content-Type: application/json; charset=utf-8');

if ($uri === '/users') {
    echo json_encode($users);
    http_response_code(200);
}else
{
    http_response_code(404);
    echo json_encode(['error' => 'Not Found']);
}