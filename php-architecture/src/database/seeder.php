<?php

$pdo = new PDO("mysql:host=localhost;dbname=my_database;charset=utf8mb4", "testuser", "secret");

$users = [
    ['name' => 'Иван Иванов', 'email' => 'ivan@example.com'],
    ['name' => 'Мария Смирнова', 'email' => 'maria@example.com'],
    ['name' => 'Алексей Петров', 'email' => 'alexey@example.com'],
    ['name' => 'Ольга Кузнецова', 'email' => 'olga@example.com'],
];

foreach ($users as $user) {
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->execute([
        'name' => $user['name'],
        'email' => $user['email'],
    ]);
}