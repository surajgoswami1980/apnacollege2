<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'apnacollegestudents';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'phone'];
}
