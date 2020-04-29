FROM debian:buster
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
  apt-get -yqq install apt-transport-https  ca-certificates \
  vim unzip \
  wget curl git ssh 
#apt-utils 

RUN \
  wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
  echo "deb https://packages.sury.org/php/ buster main" > /etc/apt/sources.list.d/php.list && \
apt-get -qq update && apt-get -qqy upgrade

RUN  apt-get -qq update && apt-get install -y \
   libapache2-mod-php7.3 php7.3-cgi \
   php7.3-cli          php7.3-gd      php7.3-common     php7.3-intl    php7.3-json   \
   php7.3-mbstring     php7.3-mysql    php7.3-opcache      php7.3-readline       php7.3-xml    php7.3-xsl   \
   php7.3-zip   \
   apache2 


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY  mainsite.conf /etc/apache2/sites-enabled/000-default.conf

RUN a2enmod vhost_alias ssl  rewrite headers


RUN apt-get update && \
  apt-get -yqq install msmtp

#COPY msmtprc.example /etc/msmtprc
COPY php.ini /etc/php/7.3/cli/php.ini
COPY php.ini /etc/php/7.3/apache2/php.ini

#aby apache log sel na stdout dockeru
RUN ln -sf /proc/self/fd/1 /var/log/apache2/access.log && \
    ln -sf /proc/self/fd/1 /var/log/apache2/error.log


CMD  /usr/sbin/apache2ctl -D FOREGROUND

