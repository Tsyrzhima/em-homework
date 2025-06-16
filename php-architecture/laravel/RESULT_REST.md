# Результаты выполнения задания 1

## Команда:
curl http://127.0.0.1:8000/api/users

## Вывод:
[
    {
        "id":1,
        "name":"User 1",
        "email":"user1@example.com",
        "email_verified_at":"2025-06-16T04:21:43.000000Z",
        "created_at":"2025-06-16T04:21:43.000000Z",
        "updated_at":"2025-06-16T04:21:43.000000Z"
    },
    {   
        "id":2,
        "name":"User 2",
        "email":"user2@example.com",
        "email_verified_at":"2025-06-16T04:21:43.000000Z",
        "created_at":"2025-06-16T04:21:44.000000Z",
        "updated_at":"2025-06-16T04:21:44.000000Z"
    },
    {   
        "id":3,
        "name":"User 3",
        "email":"user3@example.com",
        "email_verified_at":"2025-06-16T04:21:44.000000Z",
        "created_at":"2025-06-16T04:21:44.000000Z",
        "updated_at":"2025-06-16T04:21:44.000000Z"
    },
    {
        "id":4,
        "name":"User 4",
        "email":"user4@example.com",
        "email_verified_at":"2025-06-16T04:21:44.000000Z",
        "created_at":"2025-06-16T04:21:44.000000Z",
        "updated_at":"2025-06-16T04:21:44.000000Z"
    },
    {
        "id":5,
        "name":"User 5",
        "email":"user5@example.com",
        "email_verified_at":"2025-06-16T04:21:44.000000Z",
        "created_at":"2025-06-16T04:21:44.000000Z",
        "updated_at":"2025-06-16T04:21:44.000000Z"
    }
]

# Результаты выполнения задания 2

## Команда:
curl -X POST -H "Content-Type: application/json" -d '{"name": "Иван"}' http://localhost/api/users

## Вывод:

{
    "name":"Иван",
    "email":"\u0418\u0432\u0430\u043d@example.com",
    "updated_at":"2025-06-16T05:48:10.000000Z",
    "created_at":"2025-06-16T05:48:10.000000Z",
    "id":6
}

# Результаты выполнения задания 3

## Команда:
curl -X PUT -H "Content-Type: application/json" -d '{"name": "Алексей"}' http://127.0.0.1:8000/api/users/1

## Вывод:

{
    "id":1,
    "name":"Алексей",
    "email":"user1@example.com",
    "email_verified_at":"2025-06-16T04:21:43.000000Z",
    "created_at":"2025-06-16T04:21:43.000000Z",
    "updated_at":"2025-06-16T06:11:54.000000Z"
}

# Результаты выполнения задания 4

## Команда:
curl -X DELETE http://127.0.0.1:8000/api/users/1

## Вывод:

{
    "message":"Пользователь удалён с id 1"
}
