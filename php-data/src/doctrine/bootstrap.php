<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../../../vendor/autoload.php';

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . "/Entity"],
    isDevMode: true,
);

$conn = [
    'dbname'   => 'my_database',
    'user'     => 'testuser',
    'password' => 'secret',
    'host'     => 'localhost',
    'driver'   => 'pdo_mysql',
];

$connection = DriverManager::getConnection($conn, $config);
$entityManager = new EntityManager($connection, $config);

return $entityManager;