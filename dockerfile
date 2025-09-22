# Etapa 1: Dependencias de PHP y Composer
FROM php:8.2-fpm AS php

# Instalar extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader \
    && php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Etapa 2: Servidor Nginx
FROM nginx:stable-alpine

# Copiar configuración de Nginx
COPY ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Copiar el código del proyecto desde la etapa PHP
COPY --from=php /var/www /var/www

WORKDIR /var/www

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]