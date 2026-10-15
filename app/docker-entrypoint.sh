#!/bin/sh
set -e

DB_HOST="${DB_HOST:-mysql}"
DB_PORT="${DB_PORT:-3306}"
attempt=0

echo "En attente de MySQL ($DB_HOST:$DB_PORT)..."
until mysqladmin --skip-ssl --protocol=tcp --connect-timeout=2 \
    --host="$DB_HOST" --port="$DB_PORT" \
    --user="$DB_USERNAME" --password="$DB_PASSWORD" --silent ping 2>/dev/null; do
    attempt=$((attempt + 1))
    if [ "$attempt" -ge 60 ]; then
        echo "MySQL n'est pas joignable sur $DB_HOST:$DB_PORT après 120 secondes." >&2
        mysqladmin --skip-ssl --protocol=tcp --connect-timeout=2 \
            --host="$DB_HOST" --port="$DB_PORT" \
            --user="$DB_USERNAME" --password="$DB_PASSWORD" ping >&2
        exit 1
    fi
    sleep 2
done
echo "✅ MySQL est prêt !"

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