FROM php:7.3.12-fpm-stretch 

MAINTAINER neosuniversity “neosuniversity@gmail.com”

RUN apt-get update && apt-get install -y

RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
    && docker-php-ext-install \
        zip \
        intl \
		mysqli \
        pdo pdo_mysql
    

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
RUN composer self-update
#RUN wget https://cs.symfony.com/download/php-cs-fixer-v2.phar -O php-cs-fixer
#RUN chmod a+x php-cs-fixer
#RUN mv php-cs-fixer /usr/local/bin/php-cs-fixer

#RUN mkdir -p /var/www/symfony





##RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
##COPY symfony/ /var/www/symfony
##COPY symfony/ /var/www/html

##COPY symfony/composer.json /var/www/html
##COPY symfony/composer.lock  /var/www/html

#WORKDIR /var/www/html/

#RUN composer install --no-dev --prefer-dist --optimize-autoloader

#RUN mkdir /var/www/html/vendor

#COPY /var/www/html/vendor /var/www/symfony

RUN echo '#################### COMPOSER INSTALL DONE!!!########################'


WORKDIR /var/www/app

#RUN composer global require "hirak/prestissimo:^0.3" --prefer-dist --no-progress --no-suggest --optimize-autoloader --classmap-authoritative \
#	&& composer clear-cache

#ENTRYPOINT bash -c "composer install"