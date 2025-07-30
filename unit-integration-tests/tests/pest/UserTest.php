<?php

use Pest\Faker;
use Tests\User;

// Задание 4: Установка и настройка Pest

test('Pest запущен и тест проходит', function () {
   $user = new User('Ivan', 'Ivanov');
   expect($user->getFirstName())->toBe('Ivan');
});