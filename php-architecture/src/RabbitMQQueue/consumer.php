<?php

require_once __DIR__ . '/../../../vendor/autoload.php';


use PhpAmqpLib\Connection\AMQPStreamConnection;

$logFile = __DIR__ . '/logs/consumer.log';
if (!file_exists(dirname($logFile))) {
    mkdir(dirname($logFile), 0777, true);
}

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('task_queue', false, true, false, false);

echo "Ожидание сообщений\n";

$callback = function ($msg) use ($logFile) {
    $data = json_decode($msg->body, true);
    $log = "[" . date('Y-m-d H:i:s') . "] Получена задача: " . $data['task'] . PHP_EOL;
    file_put_contents($logFile, $log, FILE_APPEND);
    echo "Сообщение получено и записано в лог\n";
};

$channel->basic_consume('task_queue', '', false, true, false, false, $callback);

while ($channel->is_consuming()) {
    $channel->wait();
}
