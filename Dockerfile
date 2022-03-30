FROM devilbox/php-fpm-8.0:latest

FROM php:8.0-fpm
RUN apt-get update

# Install PDO and PGSQL Drivers
RUN apt-get install -y libpq-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-install pgsql
WORKDIR /var/www/html/code
