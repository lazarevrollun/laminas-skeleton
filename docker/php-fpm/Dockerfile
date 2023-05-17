FROM php:8.1-fpm

RUN apt-get update && apt-get install -y wget git unzip \
    && pecl install xdebug-3.1.1 \
    && docker-php-ext-enable xdebug

ADD ./php.ini /usr/local/etc/php/php.ini

RUN wget https://getcomposer.org/installer -O - -q \
    | php -- --install-dir=/bin --filename=composer --quiet

COPY xdebug.ini "{$PHP_INI_DIR}/conf.d"

WORKDIR /var/www