FROM debian:buster
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
  apt-get -yqq install apt-transport-https  ca-certificates \
  vim unzip \
  wget curl git ssh 

RUN \
  wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
  echo "deb https://packages.sury.org/php/ buster main" > /etc/apt/sources.list.d/php.list && \
apt-get -qq update && apt-get -qqy upgrade

RUN  apt-get -qq update && apt-get install -y \
   libapache2-mod-php5.6 php5.6-cgi \
   php5.6-cli        php5.6-gd      php5.6-common    php5.6-intl    php5.6-json   \
   php5.6-mbstring     php5.6-mysql    php5.6-opcache      php5.6-readline       php5.6-xml    php5.6-xsl   \
   php5.6-zip  php5.6-redis  php5.6-sqlite3 \
   apache2 


RUN apt-get update && \
  apt-get -yqq install msmtp

ADD site.conf /etc/apache2/sites-enabled/000-default.conf
  
  
#COPY msmtprc /etc/msmtprc
COPY php.ini /etc/php/5.6/cli/php.ini
COPY php.ini /etc/php/5.6/apache2/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN mkdir -p /var/www/project && a2enmod vhost_alias ssl  rewrite headers 

#aby apache log sel na stdout dockeru
RUN ln -sf /proc/self/fd/1 /var/log/apache2/access.log && \
    ln -sf /proc/self/fd/1 /var/log/apache2/error.log


EXPOSE 80 443

CMD  /usr/sbin/apache2ctl -D FOREGROUND

