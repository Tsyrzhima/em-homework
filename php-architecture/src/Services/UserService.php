<?php

namespace Architecture\Services;

use Architecture\Repositories\UserRepository;
use Architecture\Repositories\UserRepositoryInterface;

class UserService
{
    //private UserRepository $userRepository;
    private UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getAll(): ?array
    {
        return $this->userRepository->getAll();
    }
}