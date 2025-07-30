<?php

namespace Tests\tests;

use PHPUnit\Framework\TestCase;
use Tests\User;

class UserTest extends TestCase
{
    // Задание 1: Установка и настройка PHPUnit
    public function testCreateUser()
    {
        $user = new User ('Ivan', 'Ivanov');
        $this->assertInstanceOf(User::class, $user);
    }
    // Задание 2: Написание unit-теста (PHPUnit)
    public function testUserCanBeCreated()
    {
        $user = new User ('Ivan', 'Ivanov');
        $this->assertEquals('Ivan', $user->getFirstName());
        $this->assertEquals('Ivanov', $user->getLastName());
    }
    // Задание 3: Проверка работы методов (PHPUnit)
    public function testUserFullName()
    {
        $user = new User ('Ivan', 'Ivanov');
        $this->assertEquals('Ivan Ivanov', $user->getFullName());
    }

}
