<?php

namespace Architecture\Repositories;

class FakeUserRepository implements UserRepositoryInterface
{
    public function getAll(): ?array
    {
        return [
            ['name' => 'John Doe', 'email' => 'john@doe.com'],
            ['name' => 'Jane Doe', 'email' => 'jane@doe.com'],
        ];
    }
}