FROM php:7.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    bash \
    sudo

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Berlin /etc/localtime
RUN "date"

# Type docker-php-ext-install to see available extensions
RUN apt-get install -y libmcrypt-dev libmcrypt4 libxml2 libxml2-dev libexpat-dev
RUN docker-php-ext-install pdo pdo_mysql mcrypt xml mbstring bcmath


# install xdebug and more
RUN apt-get install -y libzip-dev
RUN pecl install xdebug zip
RUN docker-php-ext-enable xdebug zip pdo pdo_mysql mcrypt xml mbstring bcmath
RUN echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "display_startup_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.idekey=\"PHPSTORM\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN echo 'alias artisan="php artisan"' >> ~/.bashrc

# setup php dependencies

RUN chown --recursive www-data:www-data /var/www/html
WORKDIR /var/www/html
