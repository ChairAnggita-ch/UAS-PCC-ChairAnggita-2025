# Gunakan base image Nginx
FROM nginx:latest

# Salin file HTML ke direktori Nginx
COPY index.html /usr/share/nginx/html/index.html

# Port yang digunakan
EXPOSE 80
