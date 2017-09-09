#!/usr/bin/env bash

cd /var/www/html/project

echo Installing project dependencies
sudo -u www-data composer install

echo Preparing dev environment
if [ ! -f .env ]; then
    sudo -u www-data cp -n .env.example .env
    sudo -u www-data php artisan key:generate
fi

sudo -u www-data php artisan migrate

echo Starting php-fpm server
cd public
php-fpm
