FROM php:7.3-apache

RUN apt-get update && \
    apt-get install -y \
    libfreetype6-dev \
    libgd-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libjpeg-dev

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd
RUN chown -R www-data:www-data /var/www/html
