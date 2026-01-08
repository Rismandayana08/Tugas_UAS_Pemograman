# Tugas_UAS_Pemograman Web
# Project UAS Pemrograman Web  
## Sistem Informasi Modular PHP OOP

---

## 📌 Deskripsi Project
Project ini merupakan aplikasi **Sistem Informasi Berbasis Web** yang dibuat untuk memenuhi tugas **Ujian Akhir Semester (UAS) Pemrograman Web**.  
Aplikasi dikembangkan menggunakan **PHP Native dengan konsep Object Oriented Programming (OOP)** dan **arsitektur modular**, sehingga kode lebih terstruktur, mudah dipelihara, dan mudah dikembangkan.

Aplikasi ini memiliki **dashboard admin**, **sistem login**, serta **manajemen artikel (CRUD)** yang terhubung dengan database MySQL.

---

## 🎯 Tujuan Project
- Menerapkan konsep **Object Oriented Programming (OOP)** pada PHP  
- Menerapkan **struktur modular** dalam pengembangan web  
- Mengelola data artikel menggunakan database MySQL  
- Membuat sistem login admin yang aman  
- Menampilkan dashboard admin yang informatif dan modern  

---

## 🧱 Teknologi yang Digunakan
- PHP Native (OOP)
- MySQL / MariaDB
- Bootstrap 5
- HTML & CSS
- XAMPP
- Git & GitHub

---

## 📂 Struktur Folder Project
```text
lab11_php_oop/
├── class/
│ └── database.php
├── module/
│ ├── home/
│ │ └── index.php
│ ├── artikel/
│ │ ├── index.php
│ │ ├── tambah.php
│ │ ├── ubah.php
│ │ ├── hapus.php
│ │ └── detail.php
│ └── user/
│ ├── login.php
│ ├── logout.php
│ └── profile.php
├── template/
│ ├── header.php
│ └── footer.php
├── config.php
├── index.php
└── .htaccess
```


---

## 🔑 Fitur Aplikasi
- Login Admin  
- Dashboard Admin  
- Manajemen Artikel (Tambah, Ubah, Hapus, Lihat)  
- Profil Admin  
- Logout  
- Routing menggunakan `.htaccess`  
- Koneksi database menggunakan class OOP  

---

## 🧠 Konsep OOP yang Digunakan
- Class dan Object  
- Constructor  
- Encapsulation  
- Reusable Class (Database)  
- Pemisahan logika program dan tampilan  

---

## 🗄️ Database
Nama database:


### Tabel
- `users`
- `artikel`

Password user disimpan menggunakan **hash (`password_hash`)** untuk menjaga keamanan data.

---

## ▶️ Cara Menjalankan Aplikasi
1. Clone repository ini
2. Simpan project ke folder:

3. Jalankan **Apache dan MySQL** di XAMPP
4. Import database `latihan_oop`
5. Buka browser dan akses:
http://localhost/lab11_php_oop


---



> **Catatan:**  
> Buat folder `screenshots/` di repository GitHub, lalu upload screenshot dari localhost:
> - `login.png`
> - `dashboard.png`
> - `artikel.png`
> - `profile.png`

---

## 👨‍🎓 Identitas
- **Nama**: Aldi Rismandayana 
- **Mata Kuliah**: Pemrograman Web  
- **Jenis Tugas**: Project UAS  

---

## ✅ Kesimpulan
Aplikasi ini telah menerapkan konsep **PHP OOP dan modularisasi** dengan baik, dilengkapi dengan sistem login, dashboard admin, serta manajemen artikel berbasis database.  
Project ini memenuhi kriteria sebagai **Project UAS Pemrograman Web** yang terstruktur, aman, dan siap dikembangkan lebih lanjut.

---

## 🎤 Catatan untuk Dosen
Repository ini digunakan sebagai dokumentasi dan versi akhir project UAS Pemrograman Web berbasis PHP OOP.

