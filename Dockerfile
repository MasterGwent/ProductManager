FROM php:8.2-fpm

# Copy composer files
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libpq-dev \
    libzip-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_pgsql \
    mbstring \
    zip \
    exif \
    pcntl \
    bcmath \
    opcache \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install Redis
RUN pecl install redis && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for application
RUN groupadd -g 1000 www && \
    useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory
COPY . /var/www

# Change ownership to www user and set proper permissions
RUN chown -R www:www /var/www && chmod -R 755 /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000

# Use the default production configuration
USER root
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Override PHP-FPM configuration to ensure it runs as the user "www"
RUN echo "user = www" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "group = www" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "listen.owner = www" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "listen.group = www" >> /usr/local/etc/php-fpm.d/www.conf

# Switch back to www user
USER www

# Set the command to run php-fpm
CMD ["php-fpm"]
