FROM php:8.1-fpm

ARG user=dev
ARG uid=1000

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    cron \
    unzip \
    default-mysql-client \
    redis-tools

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

ENV DOCUMENT_ROOT /var/www

RUN mkdir -p /var/www

WORKDIR ${DOCUMENT_ROOT}

COPY ./ ${DOCUMENT_ROOT}

COPY .env.example .env

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user && \
    chown -R $user:$user ${DOCUMENT_ROOT}

WORKDIR ${DOCUMENT_ROOT}

USER $user

RUN composer install --no-interaction

RUN php artisan key:generate

ENV PHP_MEMORY_LIMIT=2048M

EXPOSE 82 53306
