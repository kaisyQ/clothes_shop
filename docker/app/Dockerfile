FROM php:8.3.11-fpm-alpine AS app
ENV APP_ENV=dev
WORKDIR /var/www/app
COPY . .
RUN addgroup -g ${GID} symfony && \
    adduser -G symfony -u ${UID} symfony

RUN apk add --no-cache \
    build-base pkgconfig zlib-dev g++ git icu-dev zip libzip-dev libpq-dev autoconf make \
    && docker-php-ext-install intl opcache pdo pdo_pgsql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN php composer.phar install --no-scripts
EXPOSE 9000
CMD ["php-fpm", "--nodaemonize"]
