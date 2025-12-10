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
                'content' => 'Sekolah kami membuka penerimaan siswa baru untuk tahun ajaran 2024/2025. Silakan daftar online.',
                'image' => null,
                'category_id' => 1,
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Juara Lomba Matematika',
                'slug' => 'juara-lomba-matematika',
                'content' => 'Siswa kami berhasil meraih juara 1 dalam lomba matematika tingkat kabupaten.',
                'image' => null,
                'category_id' => 3,
                'status' => 'published',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('news')->insertBatch($data);
    }
}