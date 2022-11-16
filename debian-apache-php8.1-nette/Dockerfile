FROM josefjebavy/debian-apache-php8.1
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

ENV DEBIAN_FRONTEND noninteractive

WORKDIR /var/www/html

ADD site.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 80 443

CMD  /usr/sbin/apache2ctl -D FOREGROUND

