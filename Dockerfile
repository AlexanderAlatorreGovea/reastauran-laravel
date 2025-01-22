FROM php:7.4-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    sed \
    && docker-php-ext-install intl mbstring zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer 1.x
COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

# Verify Composer version
RUN composer --version

# Disable all MPMs and enable only mpm_event
RUN a2dismod mpm_prefork mpm_worker mpm_event || true && \
    a2enmod mpm_event

# Set working directory
WORKDIR /var/www/html

# Copy composer files first for caching
COPY composer.json composer.lock ./

# Install PHP dependencies inside Docker
RUN composer install --no-interaction --optimize-autoloader

# Copy the rest of the application files
COPY . .

# Copy the startup script into the container
COPY run-apache2.sh /usr/local/bin/run-apache2.sh

# Ensure the startup script is executable
RUN chmod +x /usr/local/bin/run-apache2.sh

# Ensure storage and cache directories are writable
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 80 (optional, as Heroku manages the port)
EXPOSE 80

# Set the startup script as the container's entrypoint
CMD ["run-apache2.sh"]
