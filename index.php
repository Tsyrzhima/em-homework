<?php


declare(strict_types=1);

error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

require __DIR__ . '/vendor/autoload.php';

//----------------------------------------------------------------------------------------------------------------------

/* ООП

//require 'src/Models/User.php'; // Задача 1

// Задание 2: Автозагрузка через Composer
// Задание 4: Использование use для сокращения пути

use oop\Models\Order;
use oop\Models\User;
use oop\Services\UserService;

// используем use для сокращения
// используем use для сокращения

$user = new User("Иван");
echo $user->getName() . PHP_EOL;

$service = new UserService();
echo $service->getUserGreeting("Олег") . PHP_EOL;

$order = new Order();
$order->log("Заказ создан");
*/

//----------------------------------------------------------------------------------------------------------------------

/* РАБОТА С БАЗАМИ ДАННЫХ И ORM

// 1. ПОДКЛЮЧЕНИЕ К БД ЧЕРЕЗ PDO

use data\Database;
use data\UserRepository;

// Задание 1: Установка соединения с БД
$db = new Database();
echo $db->connect() . PHP_EOL;

// Задание 2: Выполнение SELECT-запроса
print_r($db->getUsers());

// Задание 3: Добавление данных (INSERT)
// Задание 4: Защита от SQL-инъекций (Prepared Statements)

$db->addUser("Иван", "ivan@example.com");
$db->addUser("Алексей', 'hacked@example.com'); DROP TABLE users; --", "hacker@example.com");
print_r($db->getUsers());

// Задание 5: Удаление данных (DELETE)
$result = $db->deleteUser(1);
echo $result . PHP_EOL;
print_r($db->getUsers());

// 2. ЗАЩИТА ОТ SQL-ИНЪЕКЦИЙ

use data\SecureDatabase;

$db = new SecureDatabase();

// Задание 1: Использование подготовленных запросов (prepare, execute)
print_r($db->getUserByEmail("ivan@example.com"));
print_r($db->getUserByEmail("hacker@example.com' OR 1=1 --"));

// Задание 2: Безопасное добавление данных (INSERT)
$db->addSecureUser("Алексей', 'hacked@example.com'); DROP TABLE users; --", "hacker@example.com", "123456");
print_r($db->getUsers());

// Задание 3: Безопасное удаление данных (DELETE)
$db->deleteSecureUser(10);
print_r($db->getUsers());

// Задание 4: Экранирование данных (bindParam, bindValue)
$db->addSecureUser("Oleg", "oleg@example.com", "password");
print_r($db->getUserByEmail("oleg@example.com"));

// Задание 5: Ограничение ввода данных (валидация)
$db->getUserByEmail("неправильный_адрес");


//----------------------------------------------------------------------------------------------------------------------

// 3. ORM: ELOQUENT, DOCTRINE

//use data\eloquent\models\Post;
//use data\eloquent\models\User;
use data\doctrine\entities\User;
use data\doctrine\repositories\UserRepository;
use data\doctrine\entities\Post;

//require_once __DIR__ . '/php-data/src/eloquent/database.php';

// Задание 1: Создание модели (Eloquent)
$user = new User();
$user->name = "Иван";
$user->email = "ivan@example.com";
$user->password = password_hash("secret", PASSWORD_DEFAULT);
$user->save();

$post = new Post([
    'title' => 'Привет мир',
    'body' => 'Контент первого поста'
]);
$post->user()->associate($user);
$post->save();

// Задание 2: Работа с отношениями (Eloquent)
$post = Post::find(1);
echo "Автор поста: " . $post->user->name . PHP_EOL;

// Задание 3: Doctrine – создание сущности
$user = new User();
$user->setName("Анна");
$user->setEmail("anna@example.com");
$user->setPassword(password_hash('anna', PASSWORD_DEFAULT));

$entityManager->persist($user);
$entityManager->flush();

echo "Пользователь добавлен с ID: " . $user->getId() . PHP_EOL;

$entityManager = require_once __DIR__ . '/php-data/src/doctrine/bootstrap.php';
// Задание 4: Использование репозитория (Doctrine)

$userRepository = $entityManager->getRepository(User::class);
$user = $userRepository->findByEmail("ivan@example.com");

print_r($user);

// Задание 5: Отношения между сущностями (Doctrine)
$post = $entityManager->getRepository(Post::class)->find(1);
echo $post->getUser()->getName() . PHP_EOL;
*/

