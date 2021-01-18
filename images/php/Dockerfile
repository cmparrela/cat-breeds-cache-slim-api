FROM php:7.4-fpm-alpine

RUN docker-php-ext-install tokenizer mysqli pdo_mysql

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY php.ini /usr/local/etc/php/