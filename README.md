# Website MTS Darul Ulum Nglumber

Website resmi Madrasah Tsanawiyah Darul Ulum Nglumber menggunakan CodeIgniter 4 dengan fitur-fitur modern untuk pendidikan Islam terpadu.

## Fitur Utama

- **Halaman Utama**: Hero section dengan branding Islam, berita terbaru, pengumuman, agenda kegiatan
- **Profil Sekolah**: Visi misi Islam, sejarah MTS Darul Ulum, struktur organisasi
- **Data Guru & Asatidzah**: CRUD lengkap dengan upload foto, data hafizh dan guru agama
- **Berita & Artikel**: CRUD dengan editor WYSIWYG, kategori berita sekolah
- **Galeri Foto**: Upload multiple kegiatan sekolah, kategori, lightbox viewer
- **Kontak Sekolah**: Form kontak dengan Google Maps untuk lokasi MTS Darul Ulum Nglumber
- **Admin Panel**: Dashboard dengan statistik sekolah, autentikasi, manajemen user

## Tentang MTS Darul Ulum Nglumber

MTS Darul Ulum Nglumber adalah Madrasah Tsanawiyah yang berkomitmen memberikan pendidikan Islam terpadu berkualitas tinggi. Kami mengintegrasikan ilmu agama Islam dengan ilmu pengetahuan umum untuk membentuk generasi muslim yang berilmu, bertakwa, dan siap berkontribusi untuk umat.

Website ini dirancang khusus untuk mempromosikan MTS Darul Ulum Nglumber sebagai pusat pendidikan Islam unggul di Nglumber, dengan fokus pada pengembangan akhlak, kecerdasan intelektual, dan kepedulian sosial.

## Teknologi

- CodeIgniter 4
- PHP 8.2+
- MySQL 8.0+
- Bootstrap 5 dengan tema Islamic
- JavaScript (jQuery, CKEditor, Dropzone, FullCalendar)

## Setup

1. **Clone atau download proyek ini**

2. **Install dependencies** (jika menggunakan Composer):
   ```bash
   composer install
   ```

3. **Konfigurasi Database**:
   - Buat database MySQL bernama `school_website`
   - Edit file `.env` untuk konfigurasi database

4. **Jalankan Migrations**:
   ```bash
   php spark migrate
   ```

5. **Jalankan Seeders**:
   ```bash
   php spark db:seed CategorySeeder
   php spark db:seed UserSeeder
   php spark db:seed NewsSeeder
   ```

6. **Jalankan Server**:
   ```bash
   php spark serve
   ```

7. **Akses Website**:
   - Frontend: http://localhost:8080
   - Admin: http://localhost:8080/auth/login (admin/admin123 atau operator/operator123)

## Struktur Database

- users: Admin dan operator
- categories: Kategori berita dan galeri
- news: Berita dan artikel
- teachers: Data guru dan staf
- announcements: Pengumuman sekolah
- events: Agenda sekolah
- galleries: Galeri foto
- contacts: Pesan kontak

## Catatan Penting

- **Branding Islam**: Website menggunakan tema hijau dan biru yang sesuai dengan identitas pendidikan Islam
- **Konten Edukasi**: Semua konten disesuaikan dengan nilai-nilai pendidikan Islam dan karakter MTS Darul Ulum Nglumber
- **Autentikasi**: Menggunakan session manual dengan role admin dan operator untuk keamanan
- **Upload Gambar**: Struktur siap untuk foto asatidzah, galeri kegiatan sekolah, dan berita madrasah
- **CRUD Lengkap**: Fondasi lengkap untuk semua fitur (berita, guru, galeri, kontak) dengan validasi ketat
- **Editor WYSIWYG**: CKEditor terintegrasi untuk manajemen konten berita dan pengumuman
- **Responsive Design**: Dioptimalkan untuk desktop, tablet, dan mobile dengan tema Islamic

Website MTS Darul Ulum Nglumber siap untuk production deployment di server Apache/Nginx. Platform ini mempromosikan madrasah sebagai pusat pendidikan Islam terpadu yang berkualitas tinggi di Nglumber, dengan fokus pada pembentukan generasi muslim yang berilmu, bertakwa, dan berakhlak mulia.

## Lisensi

MIT License
