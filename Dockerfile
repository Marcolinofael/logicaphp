# Use a imagem oficial do PHP como base
FROM php:7.4-apache

# Instale as extensões necessárias para o PHP
RUN docker-php-ext-install pdo pdo_mysql

# Copie os arquivos do projeto para o diretório raiz do Apache
COPY . /var/www/html/

# Ajuste as permissões do diretório
RUN chown -R www-data:www-data /var/www/html

# Exponha a porta 80
EXPOSE 80
