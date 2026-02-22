FROM php:8.2-fpm

# 1. Installation des dépendances système (nécessaires pour PHP et Composer)
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql zip

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \

# 2. Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 3. Installation de la CLI Symfony (Correction de la syntaxe ici)
RUN curl -LsS https://github.com/symfony/cli/releases/latest/download/symfony_linux_amd64.gz | gzip -d -c > /usr/local/bin/symfony && \
    chmod +x /usr/local/bin/symfony

WORKDIR /var/www/html/backend