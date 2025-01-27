#!/usr/bin/env bash
set -e

# Replace 'Listen 80' with 'Listen $PORT'
sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/ports.conf

# Replace '<VirtualHost *:80>' with '<VirtualHost *:$PORT>'
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT:-80}>/g" /etc/apache2/sites-available/000-default.conf

# Just start Apache. No MPM changes!
exec apache2-foreground "$@"
