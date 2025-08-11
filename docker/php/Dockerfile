FROM php:8.2-cli

RUN apt-get update && apt-get install -y git unzip zip && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install sockets pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

COPY . .

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "unit-integration-tests/src/public"]

