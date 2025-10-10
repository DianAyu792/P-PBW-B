# Pertemuan 3 – Laravel: Menjalankan Proyek LaraPress dan Menambahkan Halaman Statis 'Kontak'

## Deskripsi
Pada pertemuan ini, saya menjalankan proyek **LaraPress** yang sudah tersedia sebelumnya. Fokus utama praktikum adalah memahami struktur proyek Laravel dan menambahkan halaman statis baru pada bagian **Views**.

---

## Langkah-Langkah 

1. **Install Composer**
   - Unduh dan instal Composer melalui situs resmi 
   - Verifikasi instalasi dengan perintah:
     ```bash
     composer -v
     ```
   - Navigasi ke directory web:
     ```bash
     C:/laragon/www
     ```
   - Menjalankan perintah:
     ```bash
     composer create-project laravel/laravel LaraPress
     ```

2. **Menjalankan Proyek Laravel**
   - Buka folder proyek `LaraPress` melalui terminal.
   - Jalankan perintah:
     ```bash
     php artisan serve
     ```
   - Pastikan proyek berhasil dijalankan melalui browser di alamat:
     ```
     http://127.0.0.1:8000
     ```

3. **Memahami Alur Kerja Pertama (Route -> View)**
   - Buka folder LaraPress menggunakan VS Code
   - Memahami Rute pada file:
     ```bash
     routes/web.php
     ```
   - Memodifikasi tampilan (view):
     ```bash
     resources/views/welcome.blade.php
     ```
     Lalu disimpan, dan masuk ke broser untuk refresh halaman:
     ```bash
     http://127.0.0.1:8000
     ```

  4. **Membuat Halaman Statis Baru "Tentang Kami"**
     - Kembali ke file:
       ```bash
       routes/web.php
       ```
     - Menambahkan rute baru untuk halaman "Tentang Kami"
     - Membuat file view baru:
       ```bash
       about.blade.php
       ```
     - Simpan, kunjungi browser dengan alamat:
       ```bash
       http://127.0.0.1:8000/tentang-kami
       ```
     - Menambahkan link navigasi, untuk memudahan perpindah halaman tanpa harus mengunjungi setiap alamat halaman secara manual.

  5. **Membuat Tugas Mandiri**
     - Membuat halaman statis baru bernama "Kontak"
     - Halaman dapat diakses dengan alamat:
       ```bash
       http://127.0.0.1:8000/kontak
       ```
     - Halaman diisi dengan informasi kontak fiktif, berupa email dan nomor telepon
     - Menambahkan link navigasi ke dan dari halaman "Kontak" di halaman lainnya.
   
     
