#!/bin/sh
set -e
DB_HOST="${DB_HOST:-mysql}"
DB_USERNAME="${DB_USERNAME:-root}"

echo "En attente de MySQL ($DB_HOST)..."
until mysqladmin ping -h"$DB_HOST" -u"$DB_USERNAME" -p"$DB_PASSWORD" --silent 2>/dev/null; do
    sleep 2
done
echo "MySQL est prêt !"

if [ ! -f .env ]; then
    cp .env.example .env
    echo ".env créé depuis .env.example"
fi

if grep -q "^APP_KEY=$" .env; then
    echo "Génération de l'APP_KEY..."
    php artisan key:generate --force
fi

php artisan migrate --force
php artisan config:clear
php artisan route:clear
php artisan view:clear

exec "$@"
