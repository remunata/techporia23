FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
  libicu-dev \
  libzip-dev \
  libonig-dev \
  libpng-dev \
  zip \
  unzip \
  git \
  curl

RUN docker-php-ext-install \
  intl \
  mbstring \
  gd \
  mysqli \
  zip

RUN a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
  && sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/apache2.conf
