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

# 1️⃣ Clone Repository
$ git clone https://github.com/MuhammadSultanBilnadzari/Docker-Laravel-Mariadb.git

# 2️⃣ Masuk ke Folder
$ cd Docker-Laravel-Mariadb

# 3️⃣ Salin File .env
$ cp .env.example .env

# ⚙️ Konfigurasi Database di .env
- DB_CONNECTION=mysql
- DB_HOST=db
- DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=laraveluser
- DB_PASSWORD=laravelpass

# 4️⃣ Jalankan Docker
$ docker-compose up -d --build

# 🛠 Container yang akan berjalan:
- Laravel App → http://localhost:8000
- phpMyAdmin → http://localhost:8080
- MariaDB Database Server

# 5️⃣ Masuk ke Container Laravel
$ docker exec -it laravel_app bash

# 6️⃣ Install Dependency Laravel
$ composer install

# 7️⃣ Generate APP Key
$ php artisan key:generate

# 8️⃣ Jalankan Migrasi
$ php artisan migrate

# 9️⃣ Buat Symbolic Link ke Folder Storage
$ php artisan storage:link

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
