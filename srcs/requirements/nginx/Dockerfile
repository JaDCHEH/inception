FROM debian:buster

RUN	apt-get -y update &&\
	apt-get -y upgrade

RUN apt-get install -y nginx openssl && \
	mkdir /etc/nginx/ssl

RUN openssl req -x509 -sha256 -days 356 -nodes -newkey rsa:2048 \
	-out /etc/ssl/certs/cjad.42.fr.crt \
	-keyout /etc/ssl/private/cjad.42.fr.key \
	-subj "/C=MA/ST=BENGURIR/L=BENGURIR/O=1337/OU=jad/CN=cjad.42.fr"

COPY ./conf/default /etc/nginx/sites-available/

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]