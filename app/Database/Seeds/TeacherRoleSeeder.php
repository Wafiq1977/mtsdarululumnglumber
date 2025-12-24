<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TeacherRoleSeeder extends Seeder
{
    public function run()
    {
        // Update existing teachers to have default role 'guru' if not set
        $this->db->table('teachers')
                 ->where('role IS NULL OR role = ""')
                 ->set('role', 'guru')
                 ->update();
    }
}
