#!/bin/sh
set -e

php artisan cache:clear
php artisan config:clear
php artisan config:cache
composer install
