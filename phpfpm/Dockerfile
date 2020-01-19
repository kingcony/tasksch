FROM php:fpm

# For composer
RUN apt-get update \
    && apt-get install -y gcc make zlib1g-dev libzip-dev libpng-dev unzip libmcrypt-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include \
    && docker-php-ext-install -j$(nproc) gd

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer

# Set composer environment
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# Install laravel installer
RUN composer global require "laravel/installer"

# PHP's DB setting
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql

# Install Node.js
RUN curl -sL https://deb.nodesource.com/setup_6.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs

RUN cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

RUN apt-get install -y cron
#RUN sed -i -e '/pam_loginuid.so/s/^/#/' /etc/pam.d/crond

RUN mkdir /debugbar
RUN chmod go+w /debugbar
WORKDIR /svr