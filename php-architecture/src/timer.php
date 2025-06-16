<?php

use Swoole\Timer;


if (!extension_loaded('swoole')) {
    die("Swoole не загружен\n");
}

echo "Таймер запущен...\n";

Timer::tick(5000, function () {
    echo "[" . date('H:i:s') . "] Таймер сработал!\n";
});

\Swoole\Event::wait();