<?php

namespace Tests;

class UserService
{
    private UserRepositoryInterface $repository;
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function getUserByEmail(string $email): array
    {
        return $this->repository->findUserByEmail($email);
    }
}