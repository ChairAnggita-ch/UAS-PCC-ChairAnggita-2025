# Gunakan base image PHP-FPM
FROM php:8.0-fpm

# Install Nginx di dalam container
RUN apt-get update && apt-get install -y nginx

# Salin seluruh file aplikasi web (termasuk PHP dan file HTML) ke dalam container
COPY ./ /var/www/html/

# Salin konfigurasi Nginx
COPY ./default.conf /etc/nginx/sites-available/default

# Menyalakan Nginx dan PHP-FPM
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]

# Expose port 80 untuk akses web
EXPOSE 80
