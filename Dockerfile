FROM php:8.3.1-apache

RUN apt-get update && apt-get install -y apache2-utils

RUN docker-php-ext-install mysqli

RUN a2enmod status

RUN echo "<Location /server-status>\n\
SetHandler server-status\n\
Require all granted\n\
</Location>\n\
ExtendedStatus On" >> /etc/apache2/apache2.conf

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80