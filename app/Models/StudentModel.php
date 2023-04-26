<?php

namespace App\Models;
use App\Entity\Student;
use CodeIgniter\Model;

class StudentModel extends Model {
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = Student::class;
    protected $allowedFields = ['name', 'address', 'email', 'phone_no'];

}   