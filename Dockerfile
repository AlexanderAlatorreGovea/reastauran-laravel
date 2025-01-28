FROM php:7.4-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    sed \
    && docker-php-ext-install intl mbstring zip pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite
RUN a2enmod rewrite

# Allow .htaccess overrides
RUN sed -i 's/AllowOverride None/AllowOverride All/i' /etc/apache2/apache2.conf

# Install Composer 1.x
COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy entire codebase
COPY . .

# Install dependencies
RUN composer install --no-interaction --optimize-autoloader

# Set the DocumentRoot to /var/www/html/public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Copy the startup script
COPY run-apache2.sh /usr/local/bin/run-apache2.sh
RUN chmod +x /usr/local/bin/run-apache2.sh

# Fix permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
CMD ["run-apache2.sh"]
