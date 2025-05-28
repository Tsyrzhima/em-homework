<?php

declare(strict_types=1);

// Задание 1: Аргументы по умолчанию

function greetUser(string $name, string $lang = 'ru'): string
{
    return match ($lang) {
        'ru' => "Привет, $name",
        'en' => "Hello, $name",
        default => "Hello, $name!"
    };
}

echo greetUser("Иван") . PHP_EOL;
echo greetUser("John", "en") . PHP_EOL;

// Задание 2: Именованные аргументы

function calculateDiscount(float $price, float $discount = 10): float
{
    return $price - ($price * $discount / 100);
}

echo calculateDiscount(price: 1000) . PHP_EOL;
echo calculateDiscount(price: 2000, discount: 20) . PHP_EOL;

// Задание 3: Несколько аргументов по умолчанию

function orderPizza(
    string $size = 'medium',
    string $crust = 'thin',
    array $toppings = ["cheese"]
): string
{
    $toppingsList = implode(", ", $toppings);
    return "Заказ: $size пицца на $crust тесте с $toppingsList";
}

echo orderPizza() . PHP_EOL;
echo orderPizza(size: "large", toppings: ["cheese", "pepperoni"]) . PHP_EOL;

// Задание 4: Обязательные и необязательные аргументы

function formatText(string $text, bool $uppercase = false): string
{
    return $uppercase ? strtoupper($text) : $text;
}

echo formatText("hello") . PHP_EOL;
echo formatText("hello", true) . PHP_EOL;

// Задание 5: Именованные аргументы с разным порядком

function generatePassword(
    int $length = 8,
    bool $includeNumbers = true,
    bool $includeSpecialChars = false
): string
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($includeNumbers) {
        $characters .= '0123456789';
    }
    if ($includeSpecialChars) {
        $characters .= '!@#$%^&*()_+-=';
    }

    $password = '';
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $maxIndex)];
    }

    return $password;
}

echo generatePassword() . PHP_EOL;
echo generatePassword(length: 12, includeSpecialChars: true) . PHP_EOL;