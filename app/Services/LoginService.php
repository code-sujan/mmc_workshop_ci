<?php

namespace App\Services;

use App\Entity\User;
use Config\Services;

class LoginService
{
    public function Login($password, User $user)
    {
        $session = Services::session();
        $session->start();
        if(!password_verify($password, $user->password))
            throw new \Exception("Invalid password");
        $userId = $user->id;
        $session->set(['id' => $userId]);
    }

    public function logout(){
        $session = Services::session();
        $session->start();
        $session->remove('id');
    }

    public function isLoggedIn()
    {
        $session = Services::session();
        $session->start();
        $userId = $session->get('id');
        return !!$userId;
    }

}