<?php

namespace Tests;

class User
{
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    // Задание 2: Написание unit-теста (PHPUnit)
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    // Задание 3: Проверка работы методов (PHPUnit)
    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}