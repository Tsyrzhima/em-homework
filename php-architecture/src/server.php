<?php

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;


$server = new Server("127.0.0.1", 9502);

$server->on("request", function (Request $request, Response $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Привет от Swoole!");
});

$server->start();
