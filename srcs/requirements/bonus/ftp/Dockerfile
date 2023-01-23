FROM debian:buster

RUN	apt-get -y update &&\
	apt-get -y upgrade &&\
	apt update -y &&\
	apt upgrade -y

RUN apt install vsftpd -y

COPY ./tools/ftp_script.sh /

COPY ./conf/vsftpd.conf	/etc/vsftpd.conf

CMD ["/ftp_script.sh"]