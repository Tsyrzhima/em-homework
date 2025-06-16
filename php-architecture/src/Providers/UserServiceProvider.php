<?php

namespace Architecture\Providers;

use Architecture\Repositories\UserRepository;
use Architecture\Repositories\UserRepositoryInterface;
use Architecture\Services\UserService;
use DI\Container;

class UserServiceProvider
{
    public static function register(Container $container): void
    {
        $container->set(UserRepositoryInterface::class, \DI\autowire(UserRepository::class));
        // $container->set(UserRepositoryInterface::class, \DI\autowire(FakeUserRepository::class));
        $container->set(UserService::class, \DI\autowire());
        $container->set('UserService', \DI\autowire(UserService::class));
    }
}