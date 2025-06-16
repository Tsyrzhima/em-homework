<?php

namespace Routes;

use Architecture\Controllers\UserController;
use Architecture\Models\User;
use Architecture\Repositories\UserRepository;

use Architecture\Services\UserService;
use PDO;

//$pdo = new PDO("mysql:host=localhost;dbname=my_database;charset=utf8mb4", "testuser", "secret");

//$userModel = new User($pdo);

$container = require __DIR__ . '/../container.php';

$controller = $container->get(UserController::class);

//$repository = new UserRepository($pdo);

//$service = new UserService($repository);

//$controller = new UserController($service);

$path = $_SERVER['REQUEST_URI'];

if ($path === '/users') {
    $controller->showAll();
} else {
    http_response_code(404);
    echo "Not Found";
}
