# FROM php:8.0-apache
# RUN apt update
# RUN apt install libcurl4-openssl-dev pkg-config libssl-dev unzip -y
# RUN pecl install mongodb
# RUN docker-php-ext-enable mongodb.so
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN composer require --working-dir=/var/www mongodb/mongodb

# EXPOSE 80

# Use the official PHP image with Apache from Docker Hub
FROM mongo

# Update package lists
RUN apt update

# Install necessary dependencies
# RUN apt install libcurl4-openssl-dev pkg-config libssl-dev unzip -y

# Install MongoDB PHP extension
# RUN pecl install mongodb

# Enable MongoDB PHP extension
# RUN docker-php-ext-enable mongodb.so

# Install Composer globally
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
# WORKDIR /app

# COPY . /app

# Require the MongoDB PHP library in the working directory
# RUN composer require mongodb/mongodb

# Expose port 80
# EXPOSE 80

# The default command to run when the container starts
# CMD ["apache2-foreground"]
