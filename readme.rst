README.md - generate-password

Sistem Generate Password WiFi Kampus
Deskripsi Proyek
Proyek ini adalah implementasi sistem generate password WiFi kampus untuk Universitas 'Aisyiyah Yogyakarta. Sistem ini memanfaatkan framework Codeigniter 3 untuk sisi server dan Bootstrap 5 untuk antarmuka pengguna (UI). Tujuan utama dari proyek ini adalah memudahkan proses penggunaan WiFi kampus dengan memberikan password yang di-generate secara dinamis.

Fitur Utama
Generate Password Otomatis: Sistem ini dapat menghasilkan password WiFi secara otomatis dengan format yang telah ditentukan.
Multi-Device: Password yang di-generate dapat digunakan oleh satu atau lebih perangkat sekaligus.
Durasi Waktu Penggunaan: Terdapat fitur durasi waktu penggunaan, sehingga password yang di-generate hanya berlaku untuk periode tertentu.
Antarmuka Pengguna Responsif: Antarmuka pengguna dibangun menggunakan Bootstrap 5 untuk memastikan tampilan yang responsif dan ramah pengguna.
Instalasi
Prasyarat
PHP >= 5.6
MySQL atau database lainnya
Web server (contoh: Apache, Nginx)
Composer (untuk manajemen dependensi)
Langkah-langkah Instalasi
Clone repositori ini ke dalam direktori web server Anda.

bash
Copy code
git clone https://github.com/nama-user/generate-password.git
Buka terminal dan masuk ke direktori proyek.

bash
Copy code
cd generate-password
Salin file application/config/database.php.example menjadi application/config/database.php dan konfigurasikan koneksi database.

bash
Copy code
cp application/config/database.php.example application/config/database.php
Salin file .env.example menjadi .env dan konfigurasikan setelan umum aplikasi.

bash
Copy code
cp .env.example .env
Buka file .env dan sesuaikan konfigurasi database dan setelan lainnya.

Import skema database ke dalam database MySQL Anda.

bash
Copy code
mysql -u your_username -p your_database_name < database.sql
Serve aplikasi menggunakan web server seperti Apache atau Nginx.

Buka aplikasi di browser dengan alamat http://localhost/generate-password.

Kontribusi
Kami menyambut kontribusi dari semua pihak. Jika Anda menemui masalah atau memiliki saran perbaikan, silakan buka issue atau kirim pull request.

Lisensi
Proyek ini dilisensikan di bawah lisensi MIT. Anda bebas menggunakan, mendistribusikan, dan memodifikasi proyek ini sesuai dengan ketentuan lisensi.

