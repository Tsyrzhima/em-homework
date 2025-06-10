<?php

namespace data;

class Database
{
    private $host = "localhost";
    private $dbname = "my_database";
    private $username = "testuser";
    private $password = "secret";
    protected \PDO $pdo;

    // Задание 1: Установка соединения с БД
    public function __construct()
    {
        try {
            $this->pdo = new \PDO(
                "mysql:host=$this->host;
                dbname=$this->dbname;
                charset=utf8",
                $this->username,
                $this->password
            );
            $this->pdo->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );
        } catch (\PDOException $e) {
            die("Ошибка подключения: " . $e->getMessage());
        }
    }
    public function connect(): string
    {
        return "Подключение успешно";
    }

    // Задание 2: Выполнение SELECT-запроса
    public function getUsers(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $users;
    }

    // Задание 3: Добавление данных (INSERT)
    // Задание 4: Защита от SQL-инъекций (Prepared Statements)
    public function addUser(string $name, string $email)
    {
        $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'email' => $email
        ]);
    }

    // Задание 5: Удаление данных (DELETE)
    public function deleteUser(int $id): string
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return "Пользователь с ID {$id} удален";
    }
}