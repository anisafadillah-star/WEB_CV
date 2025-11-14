<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['sekolah', 'jurusan', 'tahun_mulai', 'tahun_selesai', 'created_at'];
}
