#!/bin/bash

sed -i 's/autoindex off;/autoindex on;/g' /etc/nginx/sites-available/localhost
echo "..turning nginx autoindex on.."
service nginx restart