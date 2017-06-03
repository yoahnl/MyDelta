#!/usr/bin/env bash
composer install
php artisan migrate:refresh
php artisan voyager:install --with-dummy
