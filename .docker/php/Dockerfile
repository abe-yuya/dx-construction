FROM php:8.1-fpm-buster

# php.iniををコンテナにコピー
COPY php.ini /usr/local/etc/php/php.ini

# Dockerにcomposerをインストール
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
# php-extensionのインストーラーをDockerに入れる
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions \
    pdo_mysql \
    bcmath \
    mbstring \
    zip \
    opcache \
    gd \
    intl \
    redis \
    decimal \
    xdebug

RUN curl -sL https://deb.nodesource.com/setup_lts.x | bash -
RUN apt install -y nodejs
RUN apt install -y python3
RUN apt install -y python3-pip
RUN npm install --global yarn

WORKDIR /app

CMD "php-fpm"
