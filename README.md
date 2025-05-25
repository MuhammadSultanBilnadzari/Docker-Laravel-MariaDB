# 🚀 Docker + Laravel + MariaDB

Project ini merupakan template Laravel yang sudah terintegrasi dengan Docker, menggunakan:
- Laravel 12.x
- MariaDB
- phpMyAdmin
- Apache Web Server

---

# 📂 Struktur Project (Singkat)
- docker-laravel-mariadb/
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
$ git clone https://github.com/MuhammadSultanBilnadzari/docker-laravel-mysql.git
$ cd docker-laravel-mysql

# 2️⃣ Salin File .env
$ cp .env.example .env

# ⚙️ Konfigurasi Database di .env
- DB_CONNECTION=mysql
- DB_HOST=db
- DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=laraveluser
- DB_PASSWORD=laravelpass

# 3️⃣ Jalankan Docker
$ docker-compose up -d --build

# 🛠 Container yang akan berjalan:
- Laravel App → http://localhost:8000
- phpMyAdmin → http://localhost:8080
- MariaDB Database Server

# 4️⃣ Masuk ke Container Laravel
$ docker exec -it docker-laravel-mysql-app bash

# 5️⃣ Install Dependency Laravel
$ composer install

# 6️⃣ Generate APP Key
$ php artisan key:generate

# 7️⃣ Jalankan Migrasi
$ php artisan migrate

# 8️⃣ Buat Symbolic Link ke Folder Storage
$ php artisan storage:link

# 🛠 Akses phpMyAdmin
- URL: http://localhost:8080
- Server: mysql
- Username: laraveluser
- Password: laravelpass

# 🛠 Untuk melihat file yang telah diupload
URL: http://localhost:8000/storage/uploads/namafile.jpg


# 🧑‍💻 Author
Muhammad Sultan Bilnadzari
📍 Lhokseumawe, Aceh
📅 25 May 2025
