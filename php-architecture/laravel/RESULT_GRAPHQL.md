# Результаты выполнения задания 5

## Команда:
curl -X POST http://127.0.0.1:8000/graphql \
-H "Content-Type: application/json" \
-d '{"query": "{ users { id name } }"}'

## Вывод:

{
    "data":
        {
            "users":
                [
                    {
                        "id":"3",
                        "name":"User 3"
                    },
                    {
                        "id":"4",
                        "name":"User 4"
                    },
                    {
                        "id":"5",
                        "name":"User 5"
                    },
                    {
                        "id":"6",
                        "name":"\u0418\u0432\u0430\u043d"
                    },
                    {
                        "id":"7",
                        "name":"\u0412\u043b\u0430\u0434\u0438\u043c\u0438\u0440"
                    },
                    {
                        "id":"8",
                         "name":"\u0410\u043b\u0435\u043a\u0441\u0435\u0439"
                    }
                ]
        }
}

# Результаты выполнения задания 6

## Команда:

curl -X POST http://127.0.0.1:8000/graphql \
-H "Content-Type: application/json" \
-d '{"query": "{ getUser(id: 3) { name } }"}'

## Вывод:

{
    "data":
        {
            "user":
                {
                    "id":"3",
                    "name":"User 3",
                    "email":"user3@example.com"
                }
        }
}

# Результаты выполнения задания 7

## Команда:

curl -X POST http://127.0.0.1:8000/graphql \
-H "Content-Type: application/json" \
-d '{"query": "mutation { createUser(name: \"Мария\", email: \"maria@example.com\", password: \"password\") { id name } }"}'

## Вывод:

{
    "data":
        {
            "createUser":
                {
                    "id":"9",
                    "name":"\u041c\u0430\u0440\u0438\u044f"
                }
        }
}
