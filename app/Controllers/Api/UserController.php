<?php
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController{
    public function index() {
        return $this->respond([1,2,3]);
    }
}

?>