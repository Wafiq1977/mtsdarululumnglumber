<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolIdentityModel extends Model
{
    protected $table = 'school_identity';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_sekolah',
        'npsn',
        'jenjang',
        'status_akreditasi',
        'alamat',
        'telepon',
        'email',
        'tahun_berdiri',
        'lembaga_pengelola',
        'deskripsi_lembaga',
        'prinsip_utama',
        'tujuan_pendidikan',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;

    public function getIdentity()
    {
        try {
            // Coba ambil dari database
            $data = $this->first();
            if (!$data) {
                return $this->getDefaultData();
            }
            return $data;
        } catch (\Exception $e) {
            // Jika tabel belum ada atau error database, kembalikan data default
            log_message('error', 'Database error in SchoolIdentityModel: ' . $e->getMessage());
            return $this->getDefaultData();
        }
    }

    private function getDefaultData()
    {
        return [
            'nama_sekolah' => 'MTS Darul Ulum Nglumber',
            'npsn' => '20512345',
            'jenjang' => 'Madrasah Tsanawiyah (MTs)',
            'status_akreditasi' => 'Terakreditasi A',
            'alamat' => 'Jl. Raya Nglumber, Desa Nglumber, Kecamatan Nglumber, Kabupaten Lumajang, Jawa Timur 67392',
            'telepon' => '(0334) 1234567',
            'email' => 'info@mtsdarululum.sch.id',
            'tahun_berdiri' => '2010',
            'lembaga_pengelola' => 'LPM MAARIF NAHDLATUL ULAMA',
            'deskripsi_lembaga' => 'Lembaga Pengembangan dan Pemberdayaan Madrasah Maarif Nahdlatul Ulama',
            'prinsip_utama' => 'Ahlussunnah wal Jama\'ah (Aswaja) sebagai landasan pendidikan Islam moderat dan toleran.',
            'tujuan_pendidikan' => 'Mencetak generasi yang berilmu, berakhlak, dan berkontribusi bagi umat dan bangsa.'
        ];
    }
}