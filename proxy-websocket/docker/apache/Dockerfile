FROM debian:buster
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
  apt-get -yqq install apt-transport-https  ca-certificates \
  wget curl git ssh curl nano vim

RUN apt-get -qq update && apt-get install -y apache2



#aby apache log sel na stdout dockeru
RUN ln -sf /proc/self/fd/1 /var/log/apache2/access.log && \
    ln -sf /proc/self/fd/1 /var/log/apache2/error.log

COPY ./site.conf /etc/apache2/sites-available/000-default.conf


RUN  a2enmod rewrite  vhost_alias ssl proxy  proxy_http proxy_wstunnel

EXPOSE 80 443

CMD  /usr/sbin/apache2ctl -D FOREGROUND

