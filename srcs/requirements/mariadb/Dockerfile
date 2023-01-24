FROM debian:buster

RUN	apt-get -y update &&\
	apt-get -y upgrade

RUN apt-get install -y mariadb-server mariadb-client

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/db_create.sql /var/www/

EXPOSE 3306

RUN service mysql start && mysql < /var/www/db_create.sql && rm -f /var/www/db_create.sql;

CMD ["mysqld"]