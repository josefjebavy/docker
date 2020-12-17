FROM nginx
#FROM debian:buster
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>


RUN apt-get update && \
  apt-get -yqq install apt-transport-https  ca-certificates \
  wget curl git ssh  vim unzip

RUN apt-get update && \
  apt-get -yqq install nginx

COPY ssl/dhparam.pem /etc/nginx/dhparam.pem
COPY ssl/nginx-selfsigned.crt /etc/ssl/certs/nginx-selfsigned.crt
COPY ssl/nginx-selfsigned.key /etc/ssl/private/nginx-selfsigned.key
#default.conf
RUN mkdir /etc/nginx/snippets/
COPY self-signed.conf ssl-params.conf /etc/nginx/snippets/
COPY site.conf /etc/nginx/conf.d/


