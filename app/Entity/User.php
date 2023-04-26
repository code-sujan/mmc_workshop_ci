<?php

namespace App\Entity;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $attributes = [
        'id' => null,
        'name' => null,
        'username' => null,
        'email' => null,
        'password' => null
    ];

    protected $datamap = [];

    public function setPassword(string $password)
    {
        $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

}