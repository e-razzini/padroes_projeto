#!/bin/bash
set -e

sleep 1s

echo "⚙️  Atualizacao de libs de servedidor..."
apt-get update -y && apt-get install -y git unzip zip libzip-dev 

echo "⚙️  Iniciando instalação do Composer e dependências..."

# Instalar dependências
composer install --no-interaction --prefer-dist || true
composer clear-cache
composer require --dev symfony/symfony

echo "📦 Instalando dependências do Composer..."

echo "🎉 Instalação concluída com sucesso!"


