FROM php:8.2-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libonig-dev libxml2-dev zip unzip git curl \
 && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

COPY . .
RUN composer install --no-interaction --optimize-autoloader

CMD ["php-fpm"]

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

