#!/bin/bash

sed -i 's/autoindex on;/autoindex off;/g' /etc/nginx/sites-available/localhost
echo "..turning nginx autoindex off.."
service nginx restart