FROM php:7.2-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install pdo_mysql
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /lazamini
WORKDIR /lazamini
RUN php artisan cache:clear
RUN php artisan config:clear
RUN php artisan config:cache
RUN composer install
EXPOSE 9000
#"php artisan cache:clear; php artisan config:clear; php artisan config:cache; composer install"
CMD ["php-fpm"]