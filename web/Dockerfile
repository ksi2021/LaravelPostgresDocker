FROM php:7.3-apache
#COPY ./  /var/www/html/
RUN apt-get update

RUN apt-get install -y libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql pgsql

RUN a2enmod rewrite
