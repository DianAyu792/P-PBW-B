
# Proyek Laravel Pertemuan 6 - SMP Mentari dengan Filament

## Identitas Diri
- *Nama : Dian Ayu Azizah*
- *NPM  : 4523210140*

## Deskripsi
Pada pertemuan ke-6 ini, kegiatan yang dilakukan adalah membuat aplikasi maanjemen sekolah SMP Mentari menggunakan Filament sebagai admin panel. Filament merupakan tools untuk membangun admin panel yang modern dan user friendly dalam environtment Laravel.

## Tools
1. Laravel 12 - PHP Framework
2. Filament v4 - Admin Panel
3. MySQL - Database
4. Laragon
5. Visual Studio Code

## Langkah-Langkah
1. Buat proyek kosong
   
   ```bash
   composer create-project laravel/laravel smpmentari_filament

   cd smpmentari_filament
   ```
2. Konfirgurasi Database (MySQL - Laragon)
   - setting .env
   ```bash
   DB_CONNECTION=mysql 
   DB_HOST=127.0.0.1 
   DB_PORT=3306 
   DB_DATABASE=smpmentari_filament 
   DB_USERNAME=root 
   DB_PASSWORD= 
   ```
   - migrasi awal
   ```bash
   php artisan migrate
   ```

3. Install Filament v4 (Admin Panel)
   - pasang paket filament v4
   ```bash
   composer require filament/filament:"^4.0"
   ```
   - generate panel admin
   ```bash
   php artisan filament:install -- panels

   what is the panels ID? (admin)
   ```
   - buat akun admin filament
   ```bash
   php artisan make:filament-user
   name : admin
   email : admin@example.com
   pw : admin123
   ```
   - link storage untuk up file
   ```bash
   php artisan storage:link
   ```

4. Desain Data Minimal (Tema SMP Mentari)
   - buat model + migrasi
   ```bash
   php artisan make:model Kegiatan -m
   php artisan make:model Siswa -m
   ```
   - jalankan migrasi
   ```bash
   php artisan migrate
   ```

5. Generate Filament Resourdce (auto CRUD)

   - kegiatan
   ```bash
   php artisan make:filament-resource Kegiatan --generate

   Models : name
   View only : no
   ```
   - siswa
   ```bash
   php artisan make:filament-resource Siswa --generate

   Models : name
   View only : no
   ```

6. Branding Panel: Identitas SMP Mentari
   - app/Provides/Filament/AdminPanelProvider.php setting
   ```bash
   ->brandName('SMP Mentari')
   ->navigationGroups('Akademik', 'Publikasi')
   ->sidebarCollapsideOnDesktop(true)
   ```

7. Halaman Depan (Public) Simple
   - routes/web.php set
   ```bash
   Route::view('/', 'welcome'); 
   Route::get('/kegiatan', function () { 
   return view('kegiatan-public', [ 
   'items' => \App\Models\Kegiatan::latest()->paginate(9), 
   ]); 
   }); 
   ```
   - add resource/views/kegiatan-public.blade.php
   <img src="./img/kegiatan-public.blade.php.png" width="100%" height="100%">
   
   - add resource/views/layouts/app.blade.php
   <img src="./img/app.blade.php.png" width="100%" height="100%">

8. Jalankan Aplikasi
   ```bash
   php artisan serve
   ```
   - Admin: http://localhost:8000/admin
   - Publik: http://localhost:8000/kegiatan
 
## Tampilan Aplikasi 

Tampilannya sebagai berikut:
1. Login
<img src="./img/login.png" width="100%" height="100%">

2. Dashboard Admin
<img src="./img/dashboard.png" width="100%" height="100%"> 

3. Halaman Kegiatan
   <img src="./img/kegiatan.png" width="100%" height="100%"> 

4. Halaman Create Kegiatan
      <img src="./img/createKegiatan.png" width="100%" height="100%"> 
      <img src="./img/createKegiatan&apos;.png" width="100%" height="100%">

5. Halaman Edit Kegiatan
      <img src="./img/editKegiatan.png" width="100%" height="100%"> 

6. Pop-up Delete Kegiatan
      <img src="./img/deleteKegiatan.png" width="100%" height="100%"> 

7. Halaman Kegiatan (Update)
      <img src="./img/kegiatanUpdate.png" width="100%" height="100%"> 

8. Halaman Siswa
      <img src="./img/siswa.png" width="100%" height="100%"> 

9. Halaman Create Siswa
   <img src="./img/createSiswa.png" width="100%" height="100%"> 
   <img src="./img/createSiswa&apos;.png" width="100%" height="100%"> 

10. Halaman Edit Siwa
      <img src="./img/editSiswa.png" width="100%" height="100%"> 

11. Halaman Delete Siwa
      <img src="./img/deleteSiswa.png" width="100%" height="100%"> 

12. Halaman Siswa (Update)
      <img src="./img/siswaUpdate.png" width="100%" height="100%"> 
   