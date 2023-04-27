<?php

namespace App\Models;

use App\Entity\Subject;
use CodeIgniter\Model;

class SubjectModel extends Model
{
    protected $table ='subject';
    protected $primaryKey='id';
    protected $allowedFields = ['name', 'description'];
    protected $returnType = Subject::class;


}