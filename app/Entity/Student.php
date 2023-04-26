<?php

namespace App\Entity;

use CodeIgniter\Entity\Entity;

class Student extends Entity
{
    public $attributes = [
        'id',
        'name',
        'address',
        'email',
        'phone_no'
    ];

}