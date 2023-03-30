FROM php:8.0-apache

COPY . /var/www/html/
WORKDIR /var/www/html/

COPY signup.php signup.php
COPY . src
EXPOSE 8000:80