#!/usr/bin/env bash
git clone git@github.com:yoahnl/mydelta.git
composer install
php artisan migrate:refresh
php artisan voyager:install --with-dummy
