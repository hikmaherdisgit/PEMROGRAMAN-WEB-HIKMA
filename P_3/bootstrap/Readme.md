# 📸 Profil Instagram Responsif

Proyek ini adalah implementasi sederhana halaman profil Instagram menggunakan **HTML**, **CSS (Custom Style)**, dan **Bootstrap 5**.  
Halaman ini menampilkan header profil, bio, serta feed postingan layaknya Instagram asli.

---
## Cara Menjalankan (Build/Run)
Kode ini bisa langsung di-run,tidak perlu di-build.
jadi cara jalannya cukup buka file index.html di browser.


## Struktur File
📦bootstrap
 ┣ 📂assets
 ┃ ┣ 📂css
 ┃ ┃ ┗ 📜style.css
 ┃ ┗ 📂img
 ┃ ┃ ┣ 📜foto 1.jpeg
 ┃ ┃ ┣ 📜foto 10.jpeg
 ┃ ┃ ┣ 📜foto 11.jpeg
 ┃ ┃ ┣ 📜foto 12.jpeg
 ┃ ┃ ┣ 📜foto 13.jpeg
 ┃ ┃ ┣ 📜foto 2.jpeg
 ┃ ┃ ┣ 📜foto 3.jpeg
 ┃ ┃ ┣ 📜foto 4.jpeg
 ┃ ┃ ┣ 📜foto 5.jpeg
 ┃ ┃ ┣ 📜foto 6.jpeg
 ┃ ┃ ┣ 📜foto 7.jpeg
 ┃ ┃ ┣ 📜foto 8.jpeg
 ┃ ┃ ┗ 📜foto 9.jpeg
 ┣ 📜index.html
 ┗ 📜Readme.md


## Dependensi
-Proyek ini menggunakan dependensi berikut:
-Bootstrap 5.3.2
 (via CDN) → untuk grid system, tombol, layouting
-Bootstrap Icons
 (via CDN) → untuk ikon seperti gear, like, comment, dll
Custom CSS (assets/css/style.css) → untuk styling tambahan (misalnya ukuran gambar profil, overlay feed, dll)

## Pertanyaan README
1. Mengapa memilih konfigurasi col tertentu untuk tiap breakpoint?
-Konfigurasi col dipilih agar tampilan tetap responsif di berbagai ukuran layar.
-Mobile (col-12) → konten ditampilkan penuh agar mudah dibaca.
-Tablet (col-md-4 / col-md-3) → konten terbagi rata, tetap nyaman dilihat.
-Desktop (col-lg-3) → lebih banyak kolom ditampilkan sehingga feed terlihat mirip Instagram asli.

2. Bagaimana memastikan tombol Follow/Edit Profile tetap mudah dijangkau di mobile?
-Dengan pendekatan responsive layout & order utilities dari Bootstrap:
-Tombol ditempatkan dalam grid yang otomatis turun ke bawah foto profil saat layar kecil.
-Menggunakan class w-50 (mobile) dan w-md-auto (desktop) supaya tombol tetap proporsional dan mudah diklik dengan jari.

3. Jika postingan bertambah jadi 50, apa potensi masalah dan bagaimana solusi grid mengatasinya?
-Potensi masalah: halaman menjadi berat (loading lambat) dan feed terlalu panjang sehingga user perlu banyak scroll.

Solusi:
-Gunakan pagination atau lazy loading (load lebih banyak saat scroll).
-Grid Bootstrap tetap otomatis menyesuaikan jumlah kolom sesuai ukuran layar, jadi layout tetap rapi meski jumlah postingan banyak.