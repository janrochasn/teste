#!/bin/bash

cd /var/www/html/teste/backend

composer install --no-dev --prefer-dist --verbose

composer dump-autoload

php-fpm

php artisan serve