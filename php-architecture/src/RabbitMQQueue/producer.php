<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
    $channel = $connection->channel();

    $channel->queue_declare('task_queue', false, true, false, false);

    $data = json_encode([
        'task' => 'Generate report',
        'time' => date('Y-m-d H:i:s')
    ]);

    $msg = new AMQPMessage($data, ['delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT]);

    $channel->basic_publish($msg, '', 'task_queue');

    echo "Сообщение отправлено в RabbitMQ\n";

    $channel->close();
    $connection->close();
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}