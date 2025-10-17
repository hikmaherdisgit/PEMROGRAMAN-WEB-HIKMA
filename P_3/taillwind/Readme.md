## Instagram Profile Clone

Proyek ini adalah pembuatan halaman web yang meniru tampilan profil Instagram menggunakan **HTML**, **CSS**, **Bootstrap**, dan **TailwindCSS**.  
Tujuannya adalah untuk mempelajari bagaimana cara membangun antarmuka modern yang responsif, serta memahami struktur grid, komponen, dan fitur interaktif.

## Desain & Struktur

1. **Header Profil**
   - Foto profil bundar.
   - Nama pengguna (username) & nama asli.
   - Tombol **Edit Profile**.
   - Informasi jumlah postingan, followers, dan following.
   - Bio singkat pengguna.

2. **Fitur Utama Instagram**
   - **Sorotan (Highlights):** Ditampilkan dalam bentuk lingkaran (seperti di IG asli).
   - **Grid Foto:** Terdiri dari 12 foto dengan tampilan **4 kolom di desktop**, **2 kolom di tablet**, dan **1 kolom di HP**.
   - **Hover Effect:** Saat diarahkan kursor, foto akan menampilkan jumlah ❤️ like dan 💬 komentar.
   - **Mode Gelap (Dark Mode):** Tombol toggle untuk mengganti tema terang ↔ gelap.
   - **Navigasi Tab:** Postingan, Reels, dan Tagged (opsional untuk dikembangkan lebih lanjut).

3. **Teknologi**
   - **HTML5** untuk struktur.
   - **TailwindCSS** untuk styling modern dan responsif.
   - **Bootstrap** sebagai tambahan utilitas grid & komponen.
   - **JavaScript sederhana** untuk toggle dark mode.

 ## Pertanyaan   

1. Keputusan grid-cols/gap di tiap breakpoint — kenapa begitu?
Saya menggunakan grid-cols-1 di mobile, grid-cols-2 di tablet, dan grid-cols-4 di desktop.
Alasan utamanya adalah agar tampilan tetap proporsional: di layar kecil foto terlihat besar & mudah diakses, sedangkan di layar besar bisa menampilkan lebih banyak foto tanpa terasa sempit. Pemilihan gap juga disesuaikan agar jarak antar foto tetap rapi.

2. Bagaimana memanfaatkan utility responsive Tailwind untuk memecahkan masalah layout di mobile?
Dengan utility responsive (sm:, md:, lg:), saya bisa membuat elemen otomatis menyesuaikan ukuran layar. Misalnya, tombol profil tetap terlihat jelas di mobile dengan w-full agar lebar penuh, sementara di desktop ukurannya lebih kecil. Ini membuat layout fleksibel tanpa perlu menulis media query manual.

3. Trade-off antara memakai banyak utility classes vs membuat component CSS tersendiri
Utility classes (Tailwind): cepat dipakai, langsung terlihat hasilnya, dan konsisten di seluruh halaman. Namun, kode HTML bisa terlihat panjang.
Component CSS sendiri: lebih rapi untuk kode HTML, mudah dipakai berulang kali, tapi butuh waktu lebih lama untuk setup dan styling manual.
Solusinya biasanya kombinasi: untuk layout cepat gunakan utility classes, sementara untuk style berulang dipindah ke komponen CSS.