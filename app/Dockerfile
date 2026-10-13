FROM php:8.4-fpm 
#fpm means the version which utilises the FastCGI protocol so gninx can understant it 
#We have also -cli and -apache
 


RUN apt-get update && apt-get install -y \
    default-mysql-client \
    git \
    curl \
    zip \
    unzip \
    libcurl4-openssl-dev \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

#Trick:always copy the dependency files before running the composer install command  
COPY . .

#Coping dependances before the code 
COPY composer.json composer.lock ./

RUN composer install --no-interaction --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["php-fpm"]