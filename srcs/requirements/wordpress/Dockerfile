FROM debian:buster

RUN apt-get -y update &&\
	apt-get -y upgrade &&\
	apt update -y &&\
	apt upgrade -y

RUN apt install php-fpm php-mysql -y &&\
	apt install curl -y

EXPOSE 9000

COPY ./conf/wp-config.php /

COPY ./tools/script.sh /

CMD ["/script.sh"]