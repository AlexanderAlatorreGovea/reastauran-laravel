#!/usr/bin/env bash

# Exit immediately if a command exits with a non-zero status
set -e

# Replace 'Listen 80' with 'Listen $PORT' in ports.conf
sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/ports.conf

# Replace '<VirtualHost *:80>' with '<VirtualHost *:$PORT>' in 000-default.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT:-80}>/g" /etc/apache2/sites-available/000-default.conf

# Disable all MPMs to prevent conflicts
a2dismod mpm_prefork mpm_worker mpm_event || true

# Enable only mpm_event
a2enmod mpm_event

# Start Apache in the foreground
exec apache2-foreground "$@"
