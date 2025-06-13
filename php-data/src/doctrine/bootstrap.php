<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../../../vendor/autoload.php';

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . "/Entity"],
    isDevMode: true,
);

$conn = [
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'symfony_db',
    'user'     => 'testuser',
    'password' => 'secret',
    'charset'  => 'utf8mb4',
];

return EntityManager::create($conn, $config);