FROM debian:buster

RUN apt-get update -y && \
	apt-get upgrade -y && \
	rm -rf /var/lib/list/* && \
	apt-get install -y nginx openssl && \
	mkdir /etc/nginx/ssl

RUN openssl req -x509 -sha256 -days 356 -nodes -newkey rsa:2048 \
	-keyout etc/nginx/ssl/cjad.42.fr.key \
	-out etc/nginx/ssl/cjad.42.fr.crt \
	-subj "/C=MA/ST=BENGURIR/L=BENGURIR/O=1337/OU=jad/CN=cjad.42.fr"

COPY conf/nginx.conf etc/nginx/nginx.conf

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]