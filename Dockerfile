FROM php:latest
COPY . /usr/src/streams
WORKDIR /usr/src/streams
CMD [ "php", "index.php" ]