Berikut adalah README yang telah diperbarui untuk repositori [uts_pemweb2_H1D023023](https://github.com/IrfanRomadhonWidodo/uts_pemweb2_H1D023023). README ini dirancang untuk memberikan gambaran yang jelas tentang proyek, cara instalasi, penggunaan, serta informasi tambahan yang relevan.

---

# UTS Pemrograman Web 2 – H1D023023

Repositori ini merupakan hasil Ujian Tengah Semester (UTS) untuk mata kuliah Pemrograman Web 2, yang dikembangkan oleh Irfan Romadhon Widodo (NIM: H1D023023). Proyek ini dibangun menggunakan framework **CodeIgniter 3** dan berfungsi sebagai sistem manajemen data alumni.

## 🧩 Fitur Utama

-Pencarian data alumni berdasarkan kata kunci, tahun kelulusan, dan program studi
-Pagination untuk navigasi data yang lebih mudah
-Statistik dashboard: total alumni, alumni tahun ini, dan total program studi
-Antarmuka pengguna yang responsif dengan integrasi Bootstrap

## 🗂️ Struktur Direktori

```bash
├── application/
│   ├── controllers/
│   │   └── Alumni.php
│   ├── models/
│   │   └── Alumni_model.php
│   └── views/
│       └── alumni/
│           └── index.php
├── system/
├── db_alumni.sql
├── index.php
├── .htaccess
├── composer.json
├── .gitignore
├── license.txt
├── readme.rst
``


## 🛠️ Instalasi

1. **Clone repositori:**

   ```bash
   git clone https://github.com/IrfanRomadhonWidodo/uts_pemweb2_H1D023023.git
   ``


2. **Konfigurasi basis data:**

  - Buat basis data baru di MySL.
  - Impor file `db_alumni.sql` untuk membuat tabel dan data awl.

3. **Sesuaikan konfigurasi CodeIgniter:**

  - Buka `application/config/config.php` dan atur `base_url` sesuai dengan lingkungan Ana.
  - Buka `application/config/database.php` dan sesuaikan pengaturan koneksi basis daa.

4. **Jalankan aplikasi:**

   Akses aplikasi melalui browser dengan URL yang sesuai, misalnya: `http://localhost/uts_pemweb2_H1D023023/`.


## 📞 Kontak

Untuk pertanyaan atau masukan, silakan hbungi:

- Nama:Irfan Romadhon Widodo
- NIM: H1D23023
- Email: irfanromadhonwidodo86@gmail.com
---

