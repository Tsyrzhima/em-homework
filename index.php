<?php

function getStatusMessage(string $status): string
{
    return match ($status) {
        'success' => 'Операция выполнена успешно',
        'error'   => 'Произошла ошибка',
        'pending' => 'Операция в ожидании',
        default   => 'Неизвестный статус',
    };
}
echo getStatusMessage('success') . PHP_EOL;
echo getStatusMessage('error') . PHP_EOL;
echo getStatusMessage('pending') . PHP_EOL;
echo getStatusMessage('unknown') . PHP_EOL;