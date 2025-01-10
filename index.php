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
echo "<body style='font-family: Arial, sans-serif; background-color: #f4f4f4;'>";
echo "    <div class='container mt-5'>";
echo "        <div class='row'>";
echo "            <div class='col-md-12'>";
echo "                <div class='card'>";
echo "                    <div class='card-body'>";
echo "                        <div class='row'>";
echo "                            <div class='col-md-4 text-center'>";
echo "                                <img src='images/chair.png' class='img-fluid rounded-circle profile-img' alt='Foto Profil'>";
echo "                            </div>";
echo "                            <div class='col-md-8'>";
echo "                                <div class='about-section'>";
echo "                                    <h1><b>CHAIR ANGGITA</b></h1>";
echo "                                    <br>";
echo "                                    <h3>ACCOUNTING & FINANCE</h3>";
echo "                                    <h4>TENTANG SAYA</h4>";
echo "                                    <p>Nama Saya Chair Anggita, Saya memiliki pengalaman kerja sebagai Accouting dan Finance selama 4 tahun, dan terbiasa dalam menjalankan tugas accounting dan finance, serta pekerjaan administrasi lainnya</p>";
echo "                                </div>";
echo "                                <div class='card'>";
echo "                                    <div class='card-body'>";
echo "                                        <h4>RIWAYAT PENDIDIKAN</h4>";
echo "                                        <ul>";
echo "                                            <li>Institut Bina Sarana Global (2019 - Sekarang)</li>";
echo "                                            <li>SMAN 84 Jakarta (2015 - 2018)</li>";
echo "                                            <li>SMPN 249 Jakarta (2012 - 2015)</li>";
echo "                                            <li>SDN 06 Cengkareng (2012 - 2015)</li>";
echo "                                        </ul>";
echo "                                    </div>";
echo "                                </div>";
echo "                                <div class='card'>";
echo "                                    <div class='card-body'>";
echo "                                        <h4>PENGALAMAN KERJA</h4>";
echo "                                        <ul>";
echo "                                            <li>Staff Accounting di PT WINSEN INDO KARYA (2022 - 2022)</li>";
echo "                                            <li>Staff Finance di PT SINAR SUKSESLAMANYA TIGARAKSA (2020 - 2022)</li>";
echo "                                            <li>Staff Administrasi di PT WIRA JAYA LESTARI CIMONE (2018 - 2020)</li>";
echo "                                        </ul>";
echo "                                    </div>";
echo "                                </div>";
echo "                            </div>";
echo "                        </div>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "    </div>";
echo "</body>";
echo "</html>";
?>
