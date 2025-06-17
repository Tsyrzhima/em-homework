# Результаты выполнения задания 1

# Запрос
http://localhost/dispatch-job

# Ответ из браузера
{
"message": "Задача отправлена"
}

# Ответ в консоли

tsyrzhima@tsyrzhima-BRN-FXXC:~/PhpstormProjects/em-homework/php-architecture/laravel$ php artisan queue:work

INFO  Processing jobs from the [default] queue.

2025-06-17 04:50:03 App\Jobs\QueueJob ................................................................... RUNNING
2025-06-17 04:50:03 App\Jobs\QueueJob .............................................................. 10.65ms DONE

# laravel.log

[2025-06-17 04:50:03] local.INFO: Очередь Redis: Тестовое сообщение из контроллер

# Результаты выполнения задания 2

# Фоновая работа consumer.php
# Запуск producer.php

php producer.php

# Ответ от producer.php

Задача добавлена в очередь.

# Ответ от consumer.php

Отправка email: user@example.com

# Результаты выполнения задания 3

# Запуск producer.php

php producer.php

# Ответ в консоли

Сообщение отправлено в RabbitMQ

# Результаты выполнения задания 4

# Запуск consumer.php

php consumer.php

# Ответ в консоли

Ожидание сообщений
Сообщение получено и записано в лог

# logs/consumer.log

[2025-06-17 06:38:49] Получена задача: Generate report
