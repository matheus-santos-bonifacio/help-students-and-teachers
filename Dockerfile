FROM php:8.0-apache

COPY ./ /var/www/
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/

RUN docker-php-ext-install pdo pdo_mysql