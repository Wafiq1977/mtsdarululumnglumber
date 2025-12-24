<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'nip', 'position', 'subject', 'education', 'experience', 'contact', 'photo', 'role'];
    protected $useTimestamps = true;
}