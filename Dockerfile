FROM bitnami/laravel
WORKDIR /app
COPY . .
LABEL org.opencontainers.image.description "Lynix.ca Personal Website"
EXPOSE 8000
