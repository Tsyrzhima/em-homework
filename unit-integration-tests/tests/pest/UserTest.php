<?php

use Pest\Faker;
use Tests\User;

test('getFirstName возвращает корректное имя', function () {
   $user = new User('Ivan', 'Ivanov');
   expect($user->getFirstName())->toBe('Ivan');
});