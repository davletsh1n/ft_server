CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'ssandman'@'localhost' IDENTIFIED BY 'ssandman';
GRANT ALL PRIVILEGES ON wordpress.* TO 'ssandman'@'localhost';
FLUSH PRIVILEGES;