FROM bitnami/laravel

WORKDIR /app

COPY . .

RUN composer install

EXPOSE 48080

ENTRYPOINT [ "/opt/bitnami/scripts/laravel/entrypoint.sh" ]
CMD [ "/opt/bitnami/scripts/laravel/run.sh" ]
