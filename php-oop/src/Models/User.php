<?php

declare(strict_types=1);

// Задание 1: Использование namespace в классе

namespace oop\Models;
class User
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}