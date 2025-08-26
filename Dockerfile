(
echo # Dockerfile (place at repo root)
echo FROM php:8.2-apache
echo.
echo # Install system packages + PHP extensions required by Laravel
echo RUN apt-get update ^&^& apt-get install -y git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev ^&^& docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip
echo.
echo # Enable Apache rewrite module
echo RUN a2enmod rewrite
echo.
echo # Change Apache DocumentRoot to Laravel 'public' folder
echo ENV APACHE_DOCUMENT_ROOT /var/www/html/public
echo RUN sed -ri -e "s!DocumentRoot /var/www/html!DocumentRoot ${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf ^&^& sed -ri -e "s!<Directory /var/www/html>!<Directory ${APACHE_DOCUMENT_ROOT}>!g" /etc/apache2/apache2.conf
echo.
echo # Install Composer (copy from official composer image)
echo COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
echo.
echo WORKDIR /var/www/html
echo.
echo # Copy composer files first (caches layer)
echo COPY composer.json composer.lock ./
echo.
echo # Install PHP dependencies
echo RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist
echo.
echo # Copy the rest of the app
echo COPY . .
echo.
echo # Fix permissions for storage & cache
echo RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
echo.
echo EXPOSE 80
echo.
echo # Start Apache (apache2-foreground is included in base image)
echo CMD ["apache2-foreground"]
) > Dockerfile
