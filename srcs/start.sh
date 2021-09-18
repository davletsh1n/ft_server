#!/bin/bash
service php7.3-fpm start
service php7.3-fpm status
service nginx start
service mysql start

mysql -u root --skip-password < /var/www/html/tmp/setup.sql

bash