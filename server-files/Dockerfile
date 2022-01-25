FROM ubuntu/nginx:1.18-21.04_beta
USER root

### Non-root user for web server
RUN useradd -r www \
    && chown -R www:www /var/www \
    && chown -R www:www /var/lib/nginx

### APT
RUN apt -q -y update && apt -q -y upgrade

### SSH
# RUN apt -q -y --no-install-recommends install openssh-server
# COPY sshd_config /etc/ssh/sshd_config
# RUN service ssh restart

### Nginx
COPY nginx-proxy /etc/nginx/sites-available/localhost
RUN mkdir /www \
    && service nginx restart

### NodeJS
FROM node
RUN npm install -g npm@latest \
    && npm audit fix \
    && node /www/node/app.js

### PHP
# apt install -q -y --no-install-recommends php-fpm

### MongoDB
# FROM mongo

### MySQL
# FROM mysql

### Exposing ports to host system
EXPOSE 80
EXPOSE 443
EXPOSE 3306

### Cleaning up
RUN apt -qq clean \
    && rm -rf /var/lib/apt/lists/*

CMD [ "/bin/bash" ]
