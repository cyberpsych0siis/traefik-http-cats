FROM php:8-apache

LABEL traefik.http.middlewares.errorcats.errors.status 404,403,418,500-599
LABEL traefik.http.middlewares.errorcats.errors.service=httpcats-secure-test
LABEL traefik.http.middlewares.errorcats.errors.query /?code={status}

WORKDIR /var/www/html
COPY . .
EXPOSE 80
