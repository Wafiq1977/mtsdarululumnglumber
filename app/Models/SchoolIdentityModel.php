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
        'status_sekolah',
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
            'npsn' => '20582621',
            'jenjang' => 'Madrasah Tsanawiyah (MTs)',
            'status_akreditasi' => 'Terakreditasi A',
            'alamat' => 'Jl. Raya Kepohbaru, Desa Nglumber, Kecamatan Kepohbaru, Bojonegoro, Jawa Timur',
            'telepon' => '+62 952 5893 2028',
            'email' => 'mtsdunglumber@gmail.com',
            'tahun_berdiri' => '2010',
            'lembaga_pengelola' => 'LP Ma\'arif Nahdlatul Ulama\'',
            'status_sekolah' => 'SWASTA',
            'deskripsi_lembaga' => 'Lembaga Pengembangan dan Pemberdayaan Madrasah Maarif Nahdlatul Ulama',
            'prinsip_utama' => 'Ahlussunnah wal Jama\'ah (Aswaja) sebagai landasan pendidikan Islam moderat dan toleran.',
            'tujuan_pendidikan' => 'Mencetak generasi yang beriman, bertaqwa, berilmu pengetahuan dan teknologi, berakhlak mulia, cerdas, terampil, mandiri, berwawasan global, berpijak pada budaya bangsa.'
        ];
    }
}