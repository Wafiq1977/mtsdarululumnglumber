<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolProfileModel extends Model
{
    protected $table = 'school_profile';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'visi',
        'misi',
        'sejarah',
        'struktur_organisasi',
        'fasilitas',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;

    public function getProfile()
    {
        try {
            $data = $this->first();
            if (!$data) {
                return $this->getDefaultProfile();
            }
            return $data;
        } catch (\Exception $e) {
            log_message('error', 'Database error in SchoolProfileModel: ' . $e->getMessage());
            return $this->getDefaultProfile();
        }
    }

    private function getDefaultProfile()
    {
        return [
            'visi' => 'Mencetak Generasi Berakhlak, Berprestasi, dan Berwawasan Islam',
            'misi' => '1. Menyelenggarakan pendidikan yang berkualitas\n2. Mengembangkan karakter dan akhlak mulia\n3. Meningkatkan kompetensi akademik\n4. Mengembangkan bakat dan minat siswa\n5. Membangun kerjasama dengan stakeholders',
            'sejarah' => 'Sekolah ini didirikan pada tahun 2010 dengan tujuan memberikan pendidikan Islam berkualitas. Sejak berdiri, sekolah telah berkembang pesat dan mencapai berbagai prestasi.',
            'struktur_organisasi' => 'Kepala Sekolah, Wakil Kepala Sekolah, Koordinator Kurikulum, Koordinator Kesiswaan, Koordinator Sarpras, dan tim pengajar profesional.',
            'fasilitas' => 'Laboratorium Sains, Perpustakaan Modern, Lab Komputer, Lapangan Olahraga, Ruang Seni & Musik, Kantin Sehat, Mushola, dan UKS.'
        ];
    }
}