<?php

namespace Architecture\Controllers;

use Architecture\Models\User;
use Architecture\Services\UserService;

class UserController
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        //$this->userModel = $userModel;
    }

    public function showAll(): void
    {
        //$users = $this->userModel->getAll();
        $users = $this->userService->getAll();

        require __DIR__ . '/../Views/users.php';

    }
}