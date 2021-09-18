FROM debian:buster

LABEL maintainer="ssandman@student.21-school.ru"

RUN apt-get update && apt-get upgrade -y
RUN apt-get -y install wget && apt-get install -y vim

# NGINX
RUN apt-get install -y nginx
COPY ./srcs/nginx/localhost /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

# PHP
RUN apt-get install -y php php-fpm php-xml php7.3-mysql php7.3-mbstring
COPY ./srcs/php/php.ini /etc/php/7.3/fpm/php.ini

# MARIADB
RUN apt-get install -y mariadb-server

# PHPMYADMIN
WORKDIR /var/www/html/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz
RUN tar xf phpMyAdmin-5.1.0-english.tar.gz && rm -rf phpMyAdmin-5.1.0-english.tar.gz
RUN mv phpMyAdmin-5.1.0-english/ phpmyadmin
COPY ./srcs/phpmyadmin/config.inc.php /var/www/html/phpmyadmin/config.inc.php

# WORDPRESS
RUN wget https://ru.wordpress.org/latest-ru_RU.tar.gz
RUN tar xf latest-ru_RU.tar.gz && rm -rf latest-ru_RU.tar.gz
RUN chown -R www-data:www-data *
RUN chmod 755 -R *
COPY ./srcs/wp-config.php /var/www/html/wordpress/

# SSL
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj '/C=RU/ST=Tatarstan/L=Kazan/O=21/CN=localhost/emailAddress=ssandman@student.21-school.ru' \
	-keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.crt

RUN mkdir tmp

# SCRIPTS
COPY ./srcs/start.sh /var/www/html/tmp/
COPY ./srcs/setup.sql /var/www/html/tmp/
COPY ./srcs/index_on.sh /var/www/html/tmp/
COPY ./srcs/index_off.sh /var/www/html/tmp/
RUN chmod +x /var/www/html/tmp/start.sh
RUN chmod +x /var/www/html/tmp/index_on.sh
RUN chmod +x /var/www/html/tmp/index_off.sh

# MAINPAGE
COPY ./srcs/index.html /var/www/html/
COPY ./srcs/style.css /var/www/html/

EXPOSE 80 443

CMD /var/www/html/tmp/start.sh