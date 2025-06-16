<?php

namespace App\GraphQL\Resolvers;

use App\Models\User;

class UserResolver
{
    public function findUser($root, array $args)
    {
        return User::find($args['id']);
    }
}
