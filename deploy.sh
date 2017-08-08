#!/bin/bash

php artisan config:cache
php artisan route:cache
php artisan scout:mysql-index
php artisan view:clear
php artisan optimize