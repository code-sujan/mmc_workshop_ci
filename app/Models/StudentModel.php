<?php

namespace App\Models;
use CodeIgniter\Model;

class StudentModel extends Model {
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'address', 'email', 'phone_no'];


}   