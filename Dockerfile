# Gunakan base image Nginx
FROM nginx:latest

# Salin seluruh file dari direktori proyek lokal ke direktori nginx
COPY ./ /usr/share/nginx/html/

# Salin file style.css (jika terpisah) ke direktori yang tepat di dalam container
COPY style.css /usr/share/nginx/html/style.css

# Salin folder images (jika ada gambar) ke dalam container
COPY images/ /usr/share/nginx/html/images/

# Port yang digunakan oleh nginx
EXPOSE 80
