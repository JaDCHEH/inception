FROM debian:buster

RUN apt-get update -y && \
	apt-get upgrade -y && \
	rm -rf /var/lib/apt/list/* && \
	apt-get install -y mariadb-server mariadb-client

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/db_create.sh /

CMD ["/db_create.sh"]

