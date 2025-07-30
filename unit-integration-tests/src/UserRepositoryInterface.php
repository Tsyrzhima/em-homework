<?php

namespace Tests;

interface UserRepositoryInterface
{
    public function findUserByEmail(string $email): array;
}