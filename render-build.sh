#!/usr/bin/env bash
# exit on error
set -o errexit

composer install --no-dev --optimize-autoloader

# Jalankan optimasi Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Jalankan migrasi database (opsional, tapi disarankan)
# php artisan migrate --force