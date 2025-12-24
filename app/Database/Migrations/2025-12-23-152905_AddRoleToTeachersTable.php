<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoleToTeachersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('teachers', [
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['guru', 'staf'],
                'default'    => 'guru',
                'after'      => 'photo',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('teachers', 'role');
    }
}
