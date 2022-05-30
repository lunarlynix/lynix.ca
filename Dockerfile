FROM bitnami/laravel
WORKDIR /app
COPY . .
LABEL org.opencontainers.image.description lynix.ca website
EXPOSE 8000
