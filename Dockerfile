FROM php:8.0-apache

COPY ./ /var/www/
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# use your users $UID and $GID below
RUN groupadd apache-www-volume -g 1000
RUN useradd apache-www-volume -u 1000 -g 1000

RUN docker-php-ext-install pdo pdo_mysql

CMD ["apache2-foreground"]