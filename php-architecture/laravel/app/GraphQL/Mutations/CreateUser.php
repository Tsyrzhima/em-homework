<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

class CreateUser
{
    public function __invoke($_, array $args): User
    {
        return User::create([
            'name' => $args['name'],
            'email' => $args['email'],
            'password' => bcrypt($args['password']),
        ]);
    }
}
