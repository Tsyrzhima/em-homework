<?php

use Doctrine\Migrations\Configuration\Configuration;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../vendor/autoload.php';
$entityManager = require_once __DIR__ . '/src/doctrine/bootstrap.php';

$config = new PhpFile(__DIR__ . '/migrations-config.php');
return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));