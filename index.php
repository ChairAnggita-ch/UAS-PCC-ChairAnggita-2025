<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Portofolio Ilham Fadilah</title>";
echo "    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
echo "    <link rel='stylesheet' href='style.css'>";
echo "    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .profile-img {
            max-width: 1500px; /* Ukuran gambar telah diperbesar */
            height: 200px; /* Tinggi gambar telah diperbesar */
        }
        .about-section {
            margin-top: 20px;
        }
        .card {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            background-color: #f8f9fa; /* Membuat kartu transparan */
            border: none; /* Menghilangkan border kartu */
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>";
echo "</head>";
echo "<body>";
echo "    <header class='bg-primary text-white text-center py-5'>";
echo "        <h1>Ilham Fadilah</h1>";
echo "        <p>Portofolio Saya</p>";
echo "    </header>";
echo "    <main class='container my-5'>";
echo "        <section>";
echo "            <h2>Tentang Saya</h2>";
echo "            <p>Saya Ilham Fadilah, seorang mahasiswa yang berminat dalam pengembangan aplikasi modern. Saya memiliki pengalaman dalam menggunakan Docker, GitHub Actions, dan Cloud Deployment.</p>";
echo "        </section>";
echo "        <section>";
echo "            <h2>Pengalaman</h2>";
echo "            <ul class='list-group'>";
echo "                <li class='list-group-item'>penggunaan Docker untuk pengembangan aplikasi</li>";
echo "                <li class='list-group-item'>penggunaan GitHub Actions untuk automasi pengujian dan deployment</li>";
echo "                <li class='list-group-item'>penggunaan Cloud Deployment untuk menghosting aplikasi</li>";
echo "            </ul>";
echo "        </section>";
echo "        <section>";
echo "            <h2>Proyek</h2>";
echo "            <ul class='list-group'>";
echo "                <li class='list-group-item'>Proyek Aplikasi Web menggunakan Docker dan GitHub Actions</li>";
echo "                <li class='list-group-item'>Proyek Pengembangan Aplikasi Mobile menggunakan Cloud Deployment</li>";
echo "            </ul>";
echo "        </section>";
echo "    </main>";
echo "    <footer class='text-center py-4'>";
echo "        <p>&copy; 2023 Ilham Fadilah</p>";
echo "    </footer>";
echo "</body>";
echo "</html>";
?>
