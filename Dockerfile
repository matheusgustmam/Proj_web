# Usa a imagem oficial do PHP 8.2 com Apache
FROM php:8.2-apache

# Habilita o mod_rewrite
RUN a2enmod rewrite

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql

# Instala o Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Diretório do projeto
WORKDIR /var/www/html

# Copia os arquivos
COPY . .

# Instala dependências
RUN composer install --no-dev --optimize-autoloader

# Faz o Apache servir a pasta /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# Permissões
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80