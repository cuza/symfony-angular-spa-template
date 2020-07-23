FROM php:7.4-cli as php
RUN apt update && apt install -y git zip libzip-dev && \
    docker-php-ext-install zip && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer
WORKDIR /src
COPY . .
RUN cd ServerApp && composer install

FROM node:12-stretch as node
WORKDIR /src
COPY . .
RUN npm ci
RUN npm run build:angular

FROM php:7.4-apache as server
RUN a2enmod rewrite
COPY --from=node /src/dist/ /var/www/
COPY --from=php /src/ServerApp/ /var/www/
RUN rm -rf /var/www/html && mv /var/www/public /var/www/html
