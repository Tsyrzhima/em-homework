<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use React\EventLoop\Factory;
use React\Http\Browser;

$loop = Factory::create();
$browser = new Browser($loop);

echo "Отправляем запрос...\n";

$browser->get('https://jsonplaceholder.typicode.com/posts/1')
    ->then(
        function (Psr\Http\Message\ResponseInterface $response) {
            echo $response->getBody() . "\n";
        }
    );

echo "Запрос отправлен, ждем ответа...\n";

$loop->run();