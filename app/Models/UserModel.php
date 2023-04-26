<?php

namespace App\Models;

use App\Entity\User;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $returnType = User::class;
    protected $allowedFields = ['name', 'username', 'email', 'password'];
//    protected $useTimestamps = true;
//    protected $createdField = 'created_at';
//    protected $updatedField = 'updated_at';

}
