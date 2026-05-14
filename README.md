<div align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" alt="jQuery">
  
  <br>

  <h1>Modern POS (Aplikasi Kasir Sederhana)</h1>
  <p>
    <b>Sistem Informasi Point of Sales (POS) berbasis Web dengan Native PHP & AJAX</b>
  </p>
</div>

---

## 📖 Deskripsi Singkat

**Modern POS** adalah sebuah aplikasi kasir pintar dan sederhana (Point of Sales) yang dibangun menggunakan Native PHP. Aplikasi ini dirancang untuk mempermudah proses transaksi harian di toko atau bisnis skala kecil hingga menengah. Dilengkapi dengan otentikasi (Admin & Pegawai), manajemen data barang, manajemen data pelanggan, dan pencatatan transaksi secara real-time yang didukung dengan teknologi AJAX untuk *user experience* (UX) yang lebih seamless dan tanpa *reload* halaman berlebihan.

Cepat, ringan, dan mudah untuk disesuaikan kebutuhan bisnis Anda! 🚀

---

## 🛠️ Tech Stack

Aplikasi kasir ini menggunakan beberapa teknologi berikut:

- **Frontend:**
  - HTML5 & CSS3
  - [Bootstrap 5](https://getbootstrap.com/) (Framework CSS responsif)
  - JavaScript & [jQuery 3.7.1](https://jquery.com/) (AJAX request & interaktivitas data)
- **Backend:**
  - Native PHP (Procedural/Vanilla PHP)
- **Database:**
  - MySQL Database
- **Server:**
  - Apache / Laragon / XAMPP

---

## 🖥️ Tampilan Web (Screenshots)

*(Silakan tambahkan / drag-drop gambar screenshot aplikasi Anda di bawah ini)*

| Halaman Login | Dashboard Analitik |
|:---:|:---:|
| `[ Tambahkan Gambar Login Di Sini ]` | `[ Tambahkan Gambar Dashboard Di Sini ]` |

| Manajemen Barang | Halaman Transaksi Kasir |
|:---:|:---:|
| `[ Tambahkan Gambar Manajemen Barang ]` | `[ Tambahkan Gambar Transaksi Kasir ]` |

| Invoice/Struk Pembelian | Manajemen Pelanggan |
|:---:|:---:|
| `[ Tambahkan Gambar Invoice ]` | `[ Tambahkan Gambar Pelanggan ]` |

---

## ✨ Fitur Utama

Aplikasi ini mencakup berbagai modul esensial untuk mengelola transaksi kasir toko:

1. **🔒 Secure Authentication (Multi-role)**
   Fitur login dan register dengan keamanan *hashing* untuk enkripsi password. Terdapat pemisahan akses sederhana yakni level **Admin** dan **Pegawai**.
2. **🏠 Dashboard Interactive**
   Halaman antarmuka rangkuman statistik data (analytics) terkait ringkasan jumlah barang, pelanggan, dan transaksi.
3. **📦 Manajemen Barang (Inventory)**
   Fitur CRUD (Create, Read, Update, Delete) data produk. Mendukung pencarian dan pengaturan stok secara *real-time*.
4. **👥 Manajemen Pelanggan**
   Sistem pencatatan data pelanggan (membership) guna memudahkan rekaman transaksi *customer* tetap.
5. **🛒 Sistem Transaksi Terintegrasi (POS System)**
   - Proses input pembelanjaan dengan interaksi dinamis AJAX.
   - Peringatan stok / Notifikasi (AJAX Notif).
   - Penambahan dan penghapusan *cart* tagihan secara langsung.
6. **🧾 Cetak Invoice & Struk / Receipt**
   Kemampuan checkout pembayaran yang secara otomatis dapat merekam *detail transaksi* dan membuat *invoice belanja*.
7. **📊 Rekap & Detail Transaksi**
   Peninjauan ulang setiap histori pesanan lengkap beserta total pembayaran dan kembalian.

---

## ⚙️ Cara Instalasi & Menjalankan Aplikasi

Ikuti panduan ini untuk menjalankan project ini di komputer (local environment) Anda:

1. **Persiapan (Prerequisites):** 
   Pastikan Anda sudah menginstall Web Server Lokal (seperti [Laragon](https://laragon.org/) / [XAMPP](https://www.apachefriends.org/)).
2. **Clone / Download Repo:**
   Download repository ini atau jalankan perintah:
   ```bash
   git clone https://github.com/Frzz-02/aplikasi-kasir-sederhana-By-Native-PHP.git
   ```
3. **Pindahkan Folder:**
   Pindahkan folder project ke direktori web root Anda:
   - Jika menggunakan **XAMPP**: `C:/xampp/htdocs/aplikasi-kasir-sederhana-By-Native-PHP`
   - Jika menggunakan **Laragon**: `C:/laragon/www/aplikasi-kasir-sederhana-By-Native-PHP`
4. **Konfigurasi Database:**
   - Buka phpMyAdmin di `http://localhost/phpmyadmin`
   - Buat database baru dengan nama `toko`.
   - Import file sql yang ada (jika Anda memiliki file export sql). *Bila tidak, silakan bangun table sesuai kebutuhan form aplikasi*. (*Note: Pastikan setting database di file `function/koneksi.php` menggunakan user `root` dan tanpa password, atau sesuaikan dengan localhost Anda*)
5. **Jalankan Aplikasi:**
   Buka web browser dan akses URL:
   ```text
   http://localhost/aplikasi-kasir-sederhana-By-Native-PHP
   ```
6. **Login:**
   Lakukan Registrasi untuk menambahkan admin/pegawai baru. Atau, masuk dengan user yang tersedia di tabel database Anda.

---

## 💡 Penutup

Project Aplikasi Kasir (POS) ini dibuat dengan penuh dedikasi sebagai bentuk implementasi langsung pembelajaran pemrograman native PHP dan pengelolaan database. Sangat cocok dinikmati sebagai bahan *showcase portfolio* pengembangan web dan bisa juga dikustomisasi lebih lanjut menurut bisnis skala nyata.

Semoga aplikasi ini dapat terus dikembangkan dan bermanfaat. *Pull Request*, saran, dan kritik yang membangun selalu diharapkan! 💻💪

---

## 📞 Contact Details

Mari terhubung! Jika Anda memiliki pertanyaan atau ingin melihat portofolio proyek lainnya, temukan saya di:

- **GitHub:** [github.com/Frzz-02](https://github.com/Frzz-02)
- **LinkedIn:** `[ URL Profil LinkedIn Anda ]`
- **Email:** `[ Email Anda ]`

<div align="center">
  <br>
  <b>Dibuat oleh Frzz-02 dengan ✨🚀</b>
</div>