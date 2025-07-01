# Toko Online CodeIgniter 4

Proyek ini adalah platform toko online yang dibangun menggunakan [CodeIgniter 4](https://codeigniter.com/). Sistem ini menyediakan beberapa fungsionalitas untuk toko online, termasuk manajemen produk, keranjang belanja, dan sistem transaksi.

## Daftar Isi

- [Fitur](#fitur)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Struktur Proyek](#struktur-proyek)

## Fitur

- Katalog Produk
  - Tampilan produk dengan gambar
  - Pencarian produk
- Keranjang Belanja
  - Tambah/hapus produk
  - Update jumlah produk
- Sistem Transaksi
  - Proses checkout
  - Riwayat transaksi
- Panel Admin
  - Manajemen produk (CRUD)
  - Manajemen kategori
  - Laporan transaksi
  - Export data ke PDF
- Sistem Autentikasi
  - Login/Register pengguna
  - Manajemen akun
- UI Responsif dengan NiceAdmin template

## Persyaratan Sistem

- PHP >= 7.4
- Composer
- Web server (XAMPP)

## Instalasi

1. Clone repository ini
   bash
   git clone [URL repository]
   cd belajar-ci-tugas
2. Install dependensi
   bash
   composer install
3. Konfigurasi database

   - Start module Apache dan MySQL pada XAMPP
   - Buat database db_ci4 di phpmyadmin.
   - copy file .env dari tutorial https://www.notion.so/april-ns/Codeigniter4-Migration-dan-Seeding-045ffe5f44904e5c88633b2deae724d2

4. Jalankan migrasi database
   bash
   php spark migrate
5. Seeder data
   bash
   php spark db:seed ProductSeeder

   bash
   php spark db:seed UserSeeder

6. Jalankan server
   bash
   php spark serve
7. Akses aplikasi
   Buka browser dan akses http://localhost:8080 untuk melihat aplikasi.

## Struktur Proyek

Proyek menggunakan struktur MVC CodeIgniter 4:

```
belajar-ci/
├── app/
│   ├── Config/                → Konfigurasi dasar: routing, database, dll
│   ├── Controllers/           → Logika utama aplikasi (controller)
│   │   ├── ApiController.php              → Menyediakan endpoint untuk API
│   │   ├── AuthController.php             → Autentikasi pengguna (login/logout)
│   │   ├── BaseController.php             → Kelas dasar untuk semua controller
│   │   ├── ContactController.php          → Menampilkan halaman kontak
│   │   ├── DiskonController.php           → Kelola diskon per tanggal
│   │   ├── FaqController.php              → Menampilkan halaman FAQ
│   │   ├── Home.php                       → Halaman utama dan profil pengguna
│   │   ├── ProdukCategoryController.php   → Kelola kategori produk
│   │   ├── ProdukController.php           → CRUD data produk dan PDF export
│   │   └── TransaksiController.php        → Keranjang, checkout, transaksi
│   ├── Models/                → Model untuk mengakses database
│   │   ├── ProductModel.php
│   │   ├── DiskonModel.php
│   │   ├── UserModel.php
│   │   ├── CategoryModel.php
│   │   ├── TransactionModel.php
│   │   └── TransactionDetailModel.php
│   ├── Views/                 → File tampilan UI (HTML + PHP)
│   │   ├── v_produk.php           → Halaman produk
│   │   ├── v_diskon.php           → Halaman diskon
│   │   ├── v_keranjang.php        → Halaman keranjang
│   │   ├── v_checkout.php         → Halaman checkout
│   │   ├── v_profile.php          → Halaman riwayat transaksi user
│   │   ├── v_login.php            → Halaman login
│   │   ├── v_produkPDF.php        → Tampilan PDF produk
│   │   ├── v_produkCategory.php   → Kategori produk
│   │   ├── layout.php             → Layout utama
│   │   └── components/            → Header, Sidebar, Footer
│   │       ├── header.php
│   │       ├── sidebar.php
│   │       └── footer.php
│   ├── Database/
│   │   ├── Migrations/        → Struktur tabel database (Product, User, Transaksi, dst)
│   │   │   ├── 2025-05-22-061658_User.php
│   │   │   ├── 2025-05-22-061710_Product.php
│   │   │   ├── 2025-05-22-061719_Transaction.php
│   │   │   ├── 2025-05-22-061726_TransactionDetail.php
│   │   │   ├── 2025-05-29-124220_ProductCategory.php
│   │   │   └── 2025-07-01-032242_Diskon.php
│   │   └── Seeds/             → Seeder untuk data awal
│   │       ├── ProductSeeder.php
│   │       ├── UserSeeder.php
│   │       ├── DiskonSeeder.php
│   │       └── ProductCategorySeeder.php
│   ├── Filters/              → Filter akses seperti login (Auth.php, Redirect.php)
│   ├── Helpers/, Language/, Libraries/ → Folder bawaan CI4
│   └── ThirdParty/           → Bisa diisi library tambahan
├── public/
│   ├── index.php             → Entry point aplikasi
│   ├── img/                  → Folder upload gambar produk
│   ├── NiceAdmin/            → Asset UI dari template NiceAdmin (css, js, plugins)
│   └── dashboard-toko/       → File tambahan dashboard admin
├── writable/                 → Cache, logs, dan upload lainnya
├── vendor/                   → Dependency dari composer
├── .env                      → Konfigurasi lingkungan (API key, DB, dll)
├── composer.json             → Konfigurasi package PHP
├── spark                     → CLI bawaan CodeIgniter
└── README.md                 → Dokumentasi proyek ini
```

---

## 🚀 Deploy ke GitHub

_Inisialisasi Git di folder proyek_ (jika belum)

```
  bash
  git init
```

_Tambahkan semua file ke staging_

```
  bash
  git add .
```

_Commit perubahan awal_

```
  bash
  git commit -m "Inisialisasi proyek toko online CI5"
```

_Hubungkan ke repository GitHub_

```
  Buat repository di GitHub terlebih dahulu (misal: https://github.com/username/toko-ci5)
  bash
  git remote add origin https://github.com/username/toko-ci5.git
```

_Push ke GitHub_

```
  bash
  git branch -M main
  git push -u origin main
```
