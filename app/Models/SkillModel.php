<?php

namespace App\Models;
use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'level', 'created_at', 'updated_at'];
}
