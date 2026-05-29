# 🛒 Proyek Web E-Commerce: ULTRA Fashion Store (PjBL)

Proyek ini merupakan aplikasi web E-Commerce berbasis framework **Laravel (PHP)** yang dibuat untuk memenuhi tugas Project-Based Learning (PjBL). Web ini dirancang sebagai toko fashion online bernama **ULTRA**, yang menyediakan fitur katalog produk dari berbagai top brands, manajemen keranjang belanja, serta riwayat pesanan bagi pengguna.

---

## 🖥️ Dokumentasi Antarmuka (Interface Web)

Berikut adalah tangkapan layar (*screenshot*) dari setiap halaman utama pada web **ULTRA**:

### 1. Halaman Beranda (Landing Page)
![Halaman Beranda](screenshots/landing-page.png)  
*Keterangan: Menampilkan banner utama, daftar produk fashion terbaru, dan section "Top Brands on ULTRA".*

### 2. Halaman Katalog Produk
![Halaman Produk](screenshots/katalog-produk.png)  
*Keterangan: Menampilkan semua produk fashion yang tersedia dilengkapi dengan fitur kategori produk.*

### 3. Halaman Detail Produk
![Halaman Detail Produk](screenshots/detail-produk.png)  
*Keterangan: Menampilkan deskripsi lengkap pakaian, harga, informasi stok, serta tombol untuk menambahkan produk ke dalam keranjang.*

### 4. Halaman Keranjang Belanja (Shopping Cart)
![Halaman Keranjang](screenshots/keranjang-belanja.png)  
*Keterangan: Menampilkan daftar item fashion yang dipilih pengguna, kuantitas, subtotal harga, serta tombol untuk checkout.*

### 5. Halaman Riwayat Pesanan (Order History)
![Halaman Riwayat Pesanan](screenshots/riwayat-pesanan.png)  
*Keterangan: Menampilkan daftar transaksi yang pernah dilakukan oleh pengguna beserta status pengiriman atau pembayarannya.*

---

## 🗄️ Rancangan Database (Struktur Tabel di phpMyAdmin)

Aplikasi web ini menggunakan database **MySQL** yang dikelola melalui **phpMyAdmin**. Berikut adalah *screenshot* rancangan struktur untuk setiap tabel utama:

### 1. Tabel `users`
![Struktur Tabel Users](screenshots/db-users.png)  
*Keterangan: Menyimpan data akun pengguna, termasuk nama, email, password encryted, dan timestamps.*

### 2. Tabel `products`
![Struktur Tabel Products](screenshots/db-products.png)  
*Keterangan: Menyimpan data detail produk fashion (id, nama_produk, deskripsi, harga, stok, nama_file_gambar, dan id_kategori).*

### 3. Tabel `categories`
![Struktur Tabel Categories](screenshots/db-categories.png)  
*Keterangan: Tabel master yang menyimpan kategori produk fashion (misal: Atasan, Bawahan, Aksesoris).*

### 4. Tabel `carts` / `cart_items`
![Struktur Tabel Carts](screenshots/db-carts.png)  
*Keterangan: Menyimpan data sementara produk-produk yang dimasukkan pengguna ke dalam keranjang sebelum dibayar.*

### 5. Tabel `orders` (Riwayat Pesanan)
![Struktur Tabel Orders](screenshots/db-orders.png)  
*Keterangan: Menyimpan data final transaksi, total pembayaran, status pesanan, dan relasi ke user yang membeli.*

---

## 🛠️ Teknologi yang Digunakan
- **Framework:** Laravel (PHP)
- **Database:** MySQL & phpMyAdmin
- **Frontend:** Blade Templating, HTML5, CSS3, JavaScript
- **Version Control:** Git & GitHub

---

## 🚀 Cara Menjalankan Proyek Secara Lokal

1. Clone repositori ini ke komputer kamu:
   ```bash
   git clone [https://github.com/najwapuspa/pjbl-web.git](https://github.com/najwapuspa/pjbl-web.git)