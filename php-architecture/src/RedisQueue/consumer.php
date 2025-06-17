<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$redis = new Predis\Client();

while (true) {
    $task = $redis->rpop("queue:emails");
    if ($task) {
        $task = json_decode($task, true);
        echo "Отправка email: " . $task['to'] . "\n";
    }
    sleep(1);
}
