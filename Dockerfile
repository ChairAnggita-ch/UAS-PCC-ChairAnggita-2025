# Gunakan base image Nginx
FROM nginx:latest

# Salin file HTML ke direktori Nginx
COPY index.php /usr/share/nginx/html/index.php
COPY style.css /usr/share/nginx/html/style.css
COPY images/ /usr/share/nginx/html/images/


# Port yang digunakan
EXPOSE 80
