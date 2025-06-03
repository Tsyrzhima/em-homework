<?php

declare(strict_types=1);

// Задание 1: Проверка числа (if-else)

function checkNumber(int|float $number): string
{
    if ($number > 0) {
        return 'Положительное';
    }elseif ($number < 0) {
        return 'Отрицательное';
    }else{
        return 'Ноль';
    }
}

echo control_flow_tasks . phpcheckNumber(10) . PHP_EOL;
echo control_flow_tasks . phpcheckNumber(-5) . PHP_EOL;
echo control_flow_tasks . phpcheckNumber(0) . PHP_EOL;

// Задание 2: Классификация по возрасту (match)

function getAgeCategory(int $age): string
{
    return match (true){
        $age >= 0 && $age <= 12 => 'Ребенок',
        $age >= 13 && $age <= 17   => 'Подросток',
        $age >= 18 && $age <= 64 => 'Взрослый',
        $age >= 65   => 'Пожилой',
        default => "Недопустимый возраст"
    };
}

echo control_flow_tasks . phpgetAgeCategory(8) . PHP_EOL;
echo control_flow_tasks . phpgetAgeCategory(15) . PHP_EOL;
echo control_flow_tasks . phpgetAgeCategory(30) . PHP_EOL;
echo control_flow_tasks . phpgetAgeCategory(70) . PHP_EOL;

// Задание 3: Вывод чисел (цикл for)

function printNumbers(int $n): void
{
    for ($i = 1; $i <= $n; $i++) {
        echo $i . PHP_EOL;
    }
}

printNumbers(5);

// Задание 4: Факториал числа (цикл while)

function factorial(int $n): int
{
    $result = 1;
    $i = 1;

    while ($i <= $n)
    {
        $result *= $i;
        $i++;
    }

    return $result;
}

echo control_flow_tasks . phpfactorial(5) . PHP_EOL;
echo control_flow_tasks . phpfactorial(3) . PHP_EOL;
echo control_flow_tasks . phpfactorial(1) . PHP_EOL;
echo control_flow_tasks . phpfactorial(0) . PHP_EOL;

// Задание 5: Обход массива (foreach)

function printArrayItems(array $items): void
{
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
}

printArrayItems(["apple", "banana", "cherry"]);

// Задание 6: Вывод четных чисел (цикл while + continue)

function printEvenNumbers(int $n): void
{
    $i = 2;
    while ($i <= $n) {
        echo $i . PHP_EOL;
        $i += 2;
    }
    // если нужно использоавние continue
    /* $i = 1;
    while ($i <= $n){
        if($i % 2 !== 0){
            $i++;
            continue;
        }
        echo $i . PHP_EOL;
        $i++;
    }
    */
}

printEvenNumbers(10);