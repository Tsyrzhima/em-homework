<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$redis = new Predis\Client();

$redis->lpush("queue:emails", json_encode([
    'to' => 'user@example.com',
    'subject' => 'Добро пожаловать!',
    'body' => 'Спасибо за регистрацию!'
]));

echo "Задача добавлена в очередь.\n";
