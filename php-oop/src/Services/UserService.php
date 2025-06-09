<?php

declare(strict_types=1);

// Задание 3: Использование нескольких пространств имен

namespace oop\Services;

use oop\Models\User;

// используем use для сокращения

class UserService
{
    public function getUserGreeting(string $name): string
    {
        $user = new User($name);
        return "Привет, {$user->getName()}!";
    }
}