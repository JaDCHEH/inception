FROM debian:buster

RUN apt-get -y update &&\
	apt-get -y upgrade &&\
	apt update -y &&\
	apt upgrade -y

RUN	apt-get install -y php php-mysql wget

RUN wget https://www.adminer.org/latest-en.php -O /var/www/html/index.php &&\
	chown www-data:www-data /var/www/html &&\
	chmod 755 /var/www/html/index.php

WORKDIR /var/www/html

RUN rm -rf index.html

CMD ["php", "-S", "0.0.0.0:8181"]