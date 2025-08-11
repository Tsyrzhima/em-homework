# PHP-приложение в контейнерах с помощью Docker

# Результаты выполнения задания 1: Создание Dockerfile для PHP-приложения

# Командная строка

docker build -t php-app -f docker/php/Dockerfile .

# Ответ в командной строке

[+] Building 4.6s (12/12) FINISHED                                                                                                                                                                          docker:default
=> [internal] load build definition from Dockerfile                                                                                                                                                                  0.0s
=> => transferring dockerfile: 490B                                                                                                                                                                                  0.0s
=> [internal] load metadata for docker.io/library/php:8.2-cli                                                                                                                                                        2.5s
=> [internal] load .dockerignore                                                                                                                                                                                     0.0s
=> => transferring context: 2B                                                                                                                                                                                       0.0s
=> [1/7] FROM docker.io/library/php:8.2-cli@sha256:304cfb487bbe9b2ce5a933f6e5848e0248bff1fbb0d5ee36cec845f4a34f4fb1                                                                                                  0.0s
=> [internal] load build context                                                                                                                                                                                     0.2s
=> => transferring context: 3.41MB                                                                                                                                                                                   0.2s
=> CACHED [2/7] RUN apt-get update && apt-get install -y git unzip zip && rm -rf /var/lib/apt/lists/*                                                                                                                0.0s
=> CACHED [3/7] RUN docker-php-ext-install sockets pdo pdo_mysql                                                                                                                                                     0.0s
=> CACHED [4/7] RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer                                                                                             0.0s
=> CACHED [5/7] WORKDIR /app                                                                                                                                                                                         0.0s
=> [6/7] COPY . .                                                                                                                                                                                                    0.6s
=> [7/7] RUN composer install --no-interaction --prefer-dist --optimize-autoloader                                                                                                                                   0.7s
=> exporting to image                                                                                                                                                                                                0.4s
=> => exporting layers                                                                                                                                                                                               0.4s
=> => writing image sha256:85075da0c8ff42a06588056534d6723cac974bd0b1393bd5fafb5a227afba78d                                                                                                                          0.0s
=> => naming to docker.io/library/php-app

# Командная строка

docker run -p 8000:8000 php-app

# Ответ в командной строке

[Mon Aug 11 09:07:05 2025] PHP 8.2.29 Development Server (http://0.0.0.0:8000) started
[Mon Aug 11 09:07:08 2025] 172.17.0.1:48938 Accepted
[Mon Aug 11 09:07:08 2025] 172.17.0.1:48938 [200]: GET /
[Mon Aug 11 09:07:08 2025] 172.17.0.1:48938 Closing
[Mon Aug 11 09:07:08 2025] 172.17.0.1:48948 Accepted
[Mon Aug 11 09:07:49 2025] 172.17.0.1:48948 Closed without sending a request; it was probably just an unused speculative preconnection
[Mon Aug 11 09:07:49 2025] 172.17.0.1:48948 Closing

# Ответ в браузере

Hello World!

# Результаты выполнения задания 2: Подключение MySQL/PostgreSQL через Docker Compose

# Командная строка

docker compose up -d

# Ответ в браузере

[+] Running 3/3
✔ Network em-homework_default  Created                                                                                                                                                                               0.0s
✔ Container mysql_db           Started                                                                                                                                                                               0.2s
✔ Container php_app            Started  

# Ответ в браузере

Hello World!