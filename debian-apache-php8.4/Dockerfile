FROM debian:trixie
LABEL maintainer="Bc. Josef Jebavý <email@josefjebavy.cz>"

ENV DEBIAN_FRONTEND=noninteractive \
    LC_ALL=C.UTF-8 \
    LANG=C.UTF-8

RUN apt-get update && \
  apt-get -yqq install apt-transport-https  ca-certificates \
  vim unzip \
  wget curl git ssh 

RUN \
  wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
  echo "deb https://packages.sury.org/php/ trixie main" > /etc/apt/sources.list.d/php.list && \
apt-get -qq update && apt-get -qqy upgrade

RUN  apt-get -qq update && apt-get install -y \
   libapache2-mod-php8.4 php8.4-cgi \
   php8.4-cli        php8.4-gd      php8.4-common    php8.4-intl    \
   php8.4-mbstring     php8.4-mysql    php8.4-opcache      php8.4-readline       php8.4-xml    php8.4-xsl   \
   php8.4-zip   php8.4-sqlite3 php8.4-curl  php8.4-bcmath php8.5-soap  \
   apache2 


RUN apt-get update && \
  apt-get -yqq install msmtp

#COPY msmtprc /etc/msmtprc
COPY php.ini /etc/php/8.4/cli/php.ini
COPY php.ini /etc/php/8.4/apache2/php.ini

ADD site.conf /etc/apache2/sites-enabled/000-default.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN mkdir -p /var/www/project && a2enmod vhost_alias ssl  rewrite headers 

#aby apache log sel na stdout dockeru
RUN ln -sf /proc/self/fd/1 /var/log/apache2/access.log && \
    ln -sf /proc/self/fd/1 /var/log/apache2/error.log

WORKDIR /var/www/html


EXPOSE 80 443

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

