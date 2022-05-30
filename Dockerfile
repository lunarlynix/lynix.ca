# Dockerfile
FROM bitnami/laravel:9.1.7

WORKDIR /app

COPY . .

RUN composer install

ENTRYPOINT [ "/opt/bitnami/scripts/laravel/entrypoint.sh" ]
