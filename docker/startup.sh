#!/bin/sh
# Image created by lynix | lynix.ca docker image
echo ------------------------------------
echo |  Image created by lynix          |
echo |  https://lynix.ca docker image   |
echo ------------------------------------

# PORT ENV CONFIGURATION : UNCOMMENT FOR CONFIG
#    sed -i "s,LISTEN_PORT,$PORT,g" /etc/nginx/nginx.conf

# KEEP SESSION ALIVE
php-fpm -D

# START NGINX
nginx