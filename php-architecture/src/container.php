<?php

use Architecture\Controllers\UserController;
use Architecture\Providers\UserServiceProvider;
use Architecture\Repositories\UserRepository;
use Architecture\Repositories\UserRepositoryInterface;
use Architecture\Services\UserService;
use DI\Container;

require_once __DIR__ . '/../../vendor/autoload.php';

$container = new Container();

$container->set(PDO::class, function () {
    return new PDO("mysql:host=localhost;dbname=my_database;charset=utf8mb4", "testuser", "secret");
});

//$container->set('UserService', \DI\get(UserService::class));

//$container->set(UserRepository::class, \DI\autowire());
//$container->set(UserRepositoryInterface::class, \DI\autowire(UserRepository::class));
//$container->set(UserRepositoryInterface::class, \DI\get(\Architecture\Repositories\FakeUserRepository::class));

//$container->set(UserController::class, \DI\autowire());

UserServiceProvider::register($container);

return $container;