# syntax=docker/dockerfile:1
FROM debian:latest AS base

MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

ENV DEBIAN_FRONTEND noninteractive

RUN  apt-get -qq update && apt-get install -y \
   libapache2-mod-php php  apache2 




RUN mkdir -p /var/www/project && a2enmod vhost_alias ssl  rewrite headers 

#aby apache log sel na stdout dockeru
RUN ln -sf /proc/self/fd/1 /var/log/apache2/access.log && \
    ln -sf /proc/self/fd/1 /var/log/apache2/error.log


EXPOSE 80 443

CMD  /usr/sbin/apache2ctl -D FOREGROUND


FROM base AS test
RUN echo ssss> test.txt

FROM base AS devel

RUN  apt-get -qq update && apt-get install -y \
  vim unzip  wget curl git ssh 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

