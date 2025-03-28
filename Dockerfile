
#  docker system prune -a --volumes
#  docker-compose down   


# Usamos una imagen base con PHP y Apache
FROM php:8.2-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Copiar los archivos de la aplicación
COPY app/ /var/www/html/
COPY public/ /var/www/html/public/

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Configurar permisos (ajusta según tus necesidades)
RUN chown -R www-data:www-data /var/www/html