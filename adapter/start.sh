#!/bin/bash
set -e

sleep 1s

echo "⚙️  Atualizacao de libs de servedidor..."
apt-get update -y && apt-get install -y git unzip zip libzip-dev 

echo "⚙️  Iniciando instalação do Composer e dependências..."

# Instalar dependências
composer install --no-interaction --prefer-dist || true
composer clear-cache

echo "📦 Instalando dependências do Composer..."
composer remove Dompdf/Dompdf
composer require Dompdf/Dompdf --no-interaction --prefer-dist

composer remove Mpdf/Mpdf
composer require tecnickcom/tcpdf --no-interaction --prefer-dist

echo "🎉 Instalação concluída com sucesso!"

#  Verificar se o Composer já existe
#if ! command -v composer &> /dev/null; then
#    echo "📦 Instalando Composer..."
#    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#    chmod +x /usr/local/bin/composer
#else
#    echo "✅ Composer já está instalado."
#fi

# Verificar se estamos dentro do diretório do projeto
#if [ ! -f "./composer.json" ]; then
#    echo "⚠️  Nenhum composer.json encontrado em $(pwd)"
#    echo "Criando um novo projeto básico..."
#    composer init --no-interaction
#fi

