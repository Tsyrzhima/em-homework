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

function calculatePrice(int|float $basePrice, int|float $discount, int|float $tax): float
{
    $priceAfterDiscount = $basePrice - ($basePrice * $discount / 100);
    $finalPrice = $priceAfterDiscount + ($priceAfterDiscount * $tax / 100);

    return $finalPrice;
}

echo calculatePrice(basePrice: 1000, discount: 10, tax: 5) . PHP_EOL;
echo calculatePrice(tax: 5, discount: 10, basePrice: 2000) . PHP_EOL;

class User
{
    public readonly int $id;
    public readonly string $name;
    public readonly string $email;

    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User(1, 'Иван', 'ivan@example.com');
echo $user->name . PHP_EOL;
$user->name = 'Петр';
