# 🚀 Docker + Laravel + MariaDB

Project ini merupakan template Laravel yang sudah terintegrasi dengan Docker, menggunakan:
- Docker
- Laravel 12.x
- MariaDB
- phpMyAdmin
- Apache Web Server

---

# 📂 Struktur Project (Singkat)
- Docker-Laravel-Mariadb/
- ├── docker-compose.yml
- ├── Dockerfile
- ├── src/                  ← Laravel project ada di sini
- │   ├── app/
- │   ├── public/
- │   └── ...
- └── README.md

---

## 📦 Langkah Instalasi

# #️⃣ Clone Repository
    git clone https://github.com/MuhammadSultanBilnadzari/Docker-Laravel-Mariadb.git

# #️⃣ Masuk ke Folder
    cd Docker-Laravel-Mariadb

# #️⃣ Masuk ke folder src (Laravel)
    cd src

# #️⃣ Salin File .env
    mv .env.example .env

# ⚙️ Konfigurasi Database di .env
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=laraveluser
    DB_PASSWORD=laravelpass

# #️⃣ Jalankan Docker
    docker-compose up -d --build

# 🛠 Container yang akan berjalan:
- Laravel App → http://localhost:8000
- phpMyAdmin → http://localhost:8080
- MariaDB Database Server

# #️⃣ Masuk ke Container Laravel
    docker exec -it laravel_app bash

# #️⃣ Install Dependency Laravel
    composer install

# #️⃣ Generate APP Key
    php artisan key:generate

# #️⃣ Jalankan Migrasi
    php artisan migrate

# #️⃣ Buat Symbolic Link ke Folder Storage
    php artisan storage:link

# #️⃣ Install Nano
    apt-get install nano -y

# #️⃣ Konfigurasi Apache
    nano /etc/apache2/sites-available/000-default.conf

# ⚙️ Konfigurasi Apache Service 000-default.conf
    <VirtualHost *:80>
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html/public

        <Directory /var/www/html/public>
            AllowOverride All
            Require all granted
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
    </VirtualHost>

# #️⃣ Restart Apache
    service apache2 restart

# 🛠 Akses phpMyAdmin
- URL: http://localhost:8080
- Server: mysql
- Username: laraveluser
- Password: laravelpass

# 🛠 Untuk Melihat File Yang Telah di Upload
URL: http://localhost:8000/storage/uploads/namafile.jpg


# 🧑‍💻 Author
- Muhammad Sultan Bilnadzari
- 📍 Lhokseumawe, Aceh
- 📅 25 May 2025
