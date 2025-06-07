<?php

declare(strict_types=1);

// Задание 1: Фильтрация массива (array_filter)
function filterEvenNumbers(array $numbers): array
{
    return array_filter($numbers, fn ($number) => $number % 2 === 0);
}

print_r(filterEvenNumbers([1, 2, 3, 4, 5, 6]));
print_r(filterEvenNumbers([11, 15, 21]));

// Задание 2: Преобразование массива (array_map)

function squareNumbers(array $numbers): array
{
    return array_map(fn ($number) => $number ** 2, $numbers);
}

print_r(squareNumbers([1, 2, 3, 4]));
print_r(squareNumbers([-2, 5, 10]));

// Задание 3: Ассоциативные массивы

function getUserEmails(array $users): array
{
    return array_map(fn ($user) => $user['email'], $users);
}

$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
];

print_r(getUserEmails($users));
