<?php

namespace data;

class SecureDatabase extends Database
{
    // Задание 1: Использование подготовленных запросов (prepare, execute)
    public function getUserByEmail(string $email): array
    {
        // Задание 5: Ограничение ввода данных (валидация)
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            die("Некорректный email!");
        }

        $sql = "SELECT email FROM users WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        // Задание 4: Экранирование данных (bindParam, bindValue)
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        return $user ?: [];
    }
    // Задание 2: Безопасное добавление данных (INSERT)

    public function addSecureUser(string $name, string $email, string $password): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Некорректный email!");
        }

        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Задание 4: Экранирование данных (bindParam, bindValue)
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
    }

    // Задание 3: Безопасное удаление данных (DELETE)

    public function deleteSecureUser(int $id): string
    {
        if (!is_numeric($id)) {
            return "❗ Неверный ID (должно быть число)";
        }

        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return "Пользователь с ID {$id} удален";
    }

}