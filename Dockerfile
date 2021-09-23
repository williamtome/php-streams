FROM php:latest

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
  && docker-php-ext-install zip

COPY . /usr/src/streams
WORKDIR /usr/src/streams
CMD [ "php", "index.php" ]