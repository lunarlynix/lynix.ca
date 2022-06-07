FROM php:8.1-fpm-alpine

RUN apk add --no-cache nginx wget
RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

WORKDIR /var/www/html/

COPY . .

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm -rf composer-setup.php

RUN composer install

EXPOSE 8080

RUN chown -R www-data: /var/www/html
CMD sh /var/www/html/docker/startup.sh