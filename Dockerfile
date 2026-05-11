FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

# RUN php artisan config:clear
# RUN php artisan cache:clear
# RUN php artisan route:clear
# RUN php artisan view:clear

# Remprendre le cache de configuration, de route et de vue pour s'assurer que les modifications sont prises en compte.
# RUN php artisan config:cache
# RUN php artisan route:cache
# RUN php artisan view:cache 

RUN chmod -R 775 storage bootstrap/cache

CMD sh -c "php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT"
