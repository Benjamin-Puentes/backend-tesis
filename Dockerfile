# Utiliza la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala las extensiones de PHP necesarias
RUN apt-get update
RUN apt-get install libxml2-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev p7zip-full mariadb-client nano -y

# Instalar extensiones PHP
RUN docker-php-ext-install pdo pdo_mysql dom zip

# Configurar y instalar GD
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto
COPY . /var/www/html

# Establece los permisos correctos
RUN chown -R www-data:www-data /var/www/html/bootstrap /var/www/html/vendor /var/www/html/storage

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Copia el archivo de configuración de Apache
COPY ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Expone el puerto 80
EXPOSE 80

# Corre el servidor Apache
CMD ["apache2-foreground"]
