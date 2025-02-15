# Diary System API

Selamat datang di **Diary System API**! 🚀

Ikuti langkah-langkah berikut untuk menjalankan proyek Laravel ini di komputer Anda:

## 🔧 Instalasi dan Menjalankan Proyek

### 1️⃣ Clone Repository
Buka terminal dan jalankan perintah berikut untuk mengunduh kode sumber:
```sh
git clone https://github.com/fadlananshari/diary-system-API.git
```

### 2️⃣ Masuk ke Direktori Proyek
```sh
cd diary-system-API
```

### 3️⃣ Install Dependensi
Pastikan Anda telah menginstal **Composer**, lalu jalankan:
```sh
composer install
```

### 4️⃣ Konfigurasi File Environment
Ubah nama file `.env.example` menjadi `.env`:
```sh
cp .env.example .env
```
Kemudian, buka file `.env` dan tambahkan konfigurasi database:
```env
DB_DATABASE=diary-system
```

### 5️⃣ Migrasi Database
Jalankan perintah berikut untuk membuat tabel di database:
```sh
php artisan migrate
```

### 6️⃣ Generate Application Key
```sh
php artisan key:generate
```

### 7️⃣ Menjalankan Server
Jalankan perintah berikut untuk memulai server Laravel:
```sh
php artisan serve
```
Aplikasi sekarang berjalan di `http://127.0.0.1:8000` 🚀

## 📄 Dokumentasi API
Untuk informasi lebih lanjut mengenai endpoint API, silakan lihat file **"Dokumentasi API - Diary System.pdf"**.

Selamat ngoding! 🎉

