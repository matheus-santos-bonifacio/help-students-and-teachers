FROM php:8.0-apache

COPY ./ /var/www/html/
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install pdo pdo_mysql