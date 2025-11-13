#!/bin/bash
set -e

sleep 1s

echo "⚙️  Atualizacao de libs de servidor..."
apt-get update -y && apt-get install -y  git unzip zip libzip-dev 

echo "⚙️  Atualizacao composer servidor..."
curl -sS https://getcomposer.org/installer |  php && \
mv composer.phar /usr/local/bin/composer && \
chmod +x /usr/local/bin/composer

echo "⚙️  Iniciando instalação do Composer e dependências..."

# Instalar dependências
composer clear-cache
composer install --no-interaction --prefer-dist || true

echo "📦 Instalando dependências do Composer..."
curl -sS https://get.symfony.com/cli/installer 

composer create-project symfony/skeleton:"7.3.x" app
cd ./app
composer require webapp

bash -c "sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
        /etc/apache2/sites-available/000-default.conf \
        /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
        apache2-foreground"

echo "🎉 Instalação concluída com sucesso!"
