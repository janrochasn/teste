#!/bin/bash

cd /var/www/html/teste/backend

composer install --no-dev --prefer-dist --verbose

composer dump-autoload

php artisan serve --host=0.0.0.0 --port=8000