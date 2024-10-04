# Použij oficiální PHP image
FROM josefjebavy/debian-apache-php8.3
#php:8.1-apache

# Zkopíruj PHP soubory do kontejneru
COPY index.php /var/www/html/

# Nastav oprávnění (volitelné)
RUN chown -R www-data:www-data /var/www/html
