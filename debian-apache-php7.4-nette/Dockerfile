FROM josefjebavy/debian-apache-php7.4
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

ENV DEBIAN_FRONTEND noninteractive


ADD site.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 80 443

CMD  /usr/sbin/apache2ctl -D FOREGROUND

