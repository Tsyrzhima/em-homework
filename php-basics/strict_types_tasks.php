<?php

declare(strict_types=1);

// Задание 1: Строгая типизация (strict_types)
function multiply(int|float $a, int|float $b): float
{
    return $a * $b;
}

echo strict_types_tasks . phpmultiply(3, 2) . PHP_EOL;
echo strict_types_tasks . phpmultiply(3.5, 2) . PHP_EOL;
//echo multiply('3', 2) . PHP_EOL;

// Задание 2: Работа с bool
function isAdult(int $age): bool
{
    return $age >= 18;
}

echo isAdult(20) ? 'true' : 'false';
echo PHP_EOL;
echo isAdult(17) ? 'true' : 'false';
echo PHP_EOL;
//echo isAdult('20') . PHP_EOL;

// Задание 3: float и округление

function calculateTax(float $price, float $tax): float
{
    $finalPrice = $price * (1 + $tax);
    return round($finalPrice, 2);
}

echo strict_types_tasks . phpcalculateTax(100, 0.2) . PHP_EOL;
echo strict_types_tasks . phpcalculateTax(50, 0.15) . PHP_EOL;
echo strict_types_tasks . phpcalculateTax(99.99, 0.05) . PHP_EOL;

// Задание 4: array и строгая типизация

function getNamesLength(array $names): array
{
    foreach ($names as $name) {
        if (!is_string($name)) {
            throw new TypeError("Элемент не является строкой");
        }
    }
    return array_map('strlen', $names);
}

print_r(getNamesLength(["Alice", "Bob", "Charlie"]));
echo PHP_EOL;
//print_r(getNamesLength([123, "Bob", "Charlie"]));

// Задание 5: union types (PHP 8.0)

function formatValue(int|float|string $value): string
{
    return (string)$value;
}

echo strict_types_tasks . phpformatValue(100) . PHP_EOL;
echo strict_types_tasks . phpformatValue(99.99) . PHP_EOL;
echo strict_types_tasks . phpformatValue("hello") . PHP_EOL;
//echo formatValue(true);