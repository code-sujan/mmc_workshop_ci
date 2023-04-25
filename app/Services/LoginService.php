<?php

namespace App\Services;

use Config\Services;

class LoginService
{
    public function Login($student)
    {
        $session = Services::session();
        $session->start();
        $studentId = $student["id"];
        $session->set(['id' => $studentId]);

    }

    public function isLoggedIn()
    {
        $session = Services::session();
        $session->start();
        $studentId = $session->get('id');
        return !!$studentId;
    }

}