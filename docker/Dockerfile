FROM php:7.4-fpm

RUN apt update && \
    apt install -y \
        wget \
        libzip-dev \
        zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo_mysql \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php ./composer-setup.php \
    && cp ./composer.phar /usr/sbin/composer

RUN rm ./composer.phar
