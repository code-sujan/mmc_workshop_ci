<?php

namespace App\Entity;

use CodeIgniter\Entity\Entity;

class Subject extends Entity
{
    protected $attributes = [
        'id',
        'name',
        'description'
    ];

}