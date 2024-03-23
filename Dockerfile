FROM php:7.4-apache

RUN apt-get update && \
    docker-php-ext-install mysqli

COPY /app /var/www/html

EXPOSE 80