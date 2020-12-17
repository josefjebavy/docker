FROM debian:buster
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
  apt-get -yqq install apt-transport-https  ca-certificates \
  wget curl git ssh vim nano

RUN \
  wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
  echo "deb https://packages.sury.org/php/ buster main" > /etc/apt/sources.list.d/php.list && \
apt-get -qq update && apt-get -qqy upgrade

RUN apt-get -qq update &&  apt-get install -y \
   vim unzip \
libapache2-mod-php7.4 php7.4-cgi \
   php7.4-cli     php7.4-gd      php7.4-common     php7.4-intl    php7.4-json   \
   php7.4-mbstring     php7.4-mysql    php7.4-opcache      php7.4-readline       php7.4-xml    php7.4-xsl   \
 php7.4-zip  php7.4-redis php7.4-soap php7.4-curl  php7.4-sqlite3

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get -qq update && apt-get install -y \
apache2
 
RUN apt update \
    && apt-get install -y \
imagemagick  php-imagick \
rsyslog \
#libmagickwand-dev --no-install-recommends \
#   zlib1g-dev \
# && rm -rf /var/lib/apt/lists/* \
 php7.4-soap php7.4-zip zlib1g \
#php7.4-common - snad obsahuje calendar
php7.4-common



RUN a2enmod rewrite &&  a2enmod vhost_alias ssl


#aby apache log sel na stdout dockeru
RUN ln -sf /proc/self/fd/1 /var/log/apache2/access.log && \
    ln -sf /proc/self/fd/1 /var/log/apache2/error.log

COPY ./site.conf /etc/apache2/sites-available/000-default.conf



CMD  /usr/sbin/apache2ctl -D FOREGROUND

