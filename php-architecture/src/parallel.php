<?php

require __DIR__ . '/../../vendor/autoload.php';

use React\EventLoop\Factory;
use React\Http\Browser;
use Psr\Http\Message\ResponseInterface;

$loop = Factory::create();
$browser = new Browser($loop);

$urls = [
    'https://jsonplaceholder.typicode.com/posts/1',
    'https://jsonplaceholder.typicode.com/posts/2',
    'https://jsonplaceholder.typicode.com/posts/3',
];

foreach ($urls as $url) {
    $browser->get($url)->then(
        function (ResponseInterface $response) use ($url) {
            echo "Ответ для $url:\n";
            echo (string) $response->getBody() . "\n\n";
        }
    );
}

echo "Запросы отправлены, ждём ответы...\n\n";

$loop->run();