<?php

return [
    'migrations_paths' => [
        'DoctrineMigrations' => __DIR__ . '/migrations',
    ],
    'table_storage' => [
        'table_name' => 'doctrine_migration_versions',
    ],
    'all_or_nothing' => true,
    'check_database_platform' => true,
];