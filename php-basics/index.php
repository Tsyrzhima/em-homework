<?php

// Задание 1: Использование match (PHP 8.0)
function getStatusMessage(string $status): string
{
    return match ($status) {
        'success' => 'Операция выполнена успешно',
        'error'   => 'Произошла ошибка',
        'pending' => 'Операция в ожидании',
        default   => 'Неизвестный статус',
    };
}
echo index . phpgetStatusMessage('success') . PHP_EOL;
echo index . phpgetStatusMessage('error') . PHP_EOL;
echo index . phpgetStatusMessage('pending') . PHP_EOL;
echo index . phpgetStatusMessage('unknown') . PHP_EOL;

// Задание 2: Использование named arguments (PHP 8.0)
function calculatePrice(float $basePrice, float $discount, float $tax): float
{
    $priceAfterDiscount = $basePrice - ($basePrice * $discount / 100);
    $finalPrice = $priceAfterDiscount + ($priceAfterDiscount * $tax / 100);

    return $finalPrice;
}

echo index . phpcalculatePrice(basePrice: 1000, discount: 10, tax: 5) . PHP_EOL;
echo index . phpcalculatePrice(tax: 5, discount: 10, basePrice: 2000) . PHP_EOL;

// Задание 3: readonly свойства в классах (PHP 8.1)
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
//$user->name = 'Петр';

// Задание 4: Enums (PHP 8.1)
enum OrderStatus: string{
    case Pending = "Заказ в ожидании";
    case Shipped = "Заказ отправлен";
    case Delivered = "Заказ доставлен";
}
function getDeliveryMessage(OrderStatus $status): string
{
    return $status->value;
}

echo index . phpgetDeliveryMessage(OrderStatus::Pending) . PHP_EOL;
echo index . phpgetDeliveryMessage(OrderStatus::Shipped) . PHP_EOL;
echo index . phpgetDeliveryMessage(OrderStatus::Delivered) . PHP_EOL;

// Задание 5: null-safe оператор (PHP 8.0)

function getUserEmail(object $user): string
{
    return $user->profile?->email ?? 'Email не найден';
}

$user1 = (object) [
    'profile' => (object)[
        'email' => 'test@example.com'
    ]
];

$user2 = (object) [
    'profile' => null
];

echo index . phpgetUserEmail($user1) . PHP_EOL;
echo index . phpgetUserEmail($user2) . PHP_EOL;

