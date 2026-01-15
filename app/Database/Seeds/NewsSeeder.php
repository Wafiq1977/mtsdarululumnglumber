<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Penerimaan Siswa Baru Tahun 2024',
                'slug' => 'penerimaan-siswa-baru-2024',
                'content' => 'Sekolah kami membuka penerimaan siswa baru untuk tahun ajaran 2024/2025. Silakan daftar online melalui portal pendaftaran yang telah disediakan. Persyaratan pendaftaran meliputi fotokopi rapor, surat keterangan sehat, dan pas foto terbaru.',
                'image' => 'news1.jpg', // Placeholder image filename
                'category_id' => 1,
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Juara Lomba Matematika',
                'slug' => 'juara-lomba-matematika',
                'content' => 'Siswa kami berhasil meraih juara 1 dalam lomba matematika tingkat kabupaten. Prestasi ini merupakan hasil dari kerja keras siswa dan bimbingan guru matematika yang profesional.',
                'image' => 'news2.jpg', // Placeholder image filename
                'category_id' => 3,
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Kegiatan Study Tour ke Jakarta',
                'slug' => 'kegiatan-study-tour-jakarta',
                'content' => 'Siswa kelas 9 mengikuti kegiatan study tour ke Jakarta untuk mengunjungi museum dan tempat bersejarah. Kegiatan ini bertujuan untuk memperluas wawasan siswa tentang sejarah bangsa.',
                'image' => 'news3.jpg', // Placeholder image filename
                'category_id' => 2,
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Prestasi Siswa dalam Olimpiade Sains',
                'slug' => 'prestasi-siswa-olimpiade-sains',
                'content' => 'Siswa kami meraih medali emas dalam olimpiade sains nasional. Prestasi ini menunjukkan dedikasi siswa dalam bidang akademik.',
                'image' => 'news4.jpg',
                'category_id' => 4, // Prestasi Siswa
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Penghargaan untuk Guru Terbaik',
                'slug' => 'penghargaan-guru-terbaik',
                'content' => 'Guru kami menerima penghargaan sebagai guru terbaik tingkat provinsi atas kontribusinya dalam dunia pendidikan.',
                'image' => 'news5.jpg',
                'category_id' => 5, // Prestasi Guru
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Kegiatan Bakti Sosial Siswa',
                'slug' => 'kegiatan-bakti-sosial-siswa',
                'content' => 'Siswa mengadakan kegiatan bakti sosial di desa terdekat, membantu membersihkan lingkungan dan memberikan bantuan kepada warga.',
                'image' => 'news6.jpg',
                'category_id' => 6, // Kegiatan Siswa
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Pelatihan untuk Guru',
                'slug' => 'pelatihan-guru',
                'content' => 'Guru-guru mengikuti pelatihan pengembangan profesional untuk meningkatkan kualitas pengajaran.',
                'image' => 'news7.jpg',
                'category_id' => 7, // Kegiatan Guru
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('news')->insertBatch($data);
    }
}