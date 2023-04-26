<?php

namespace App\Controllers;

use App\Entity\User;
use App\Helpers\ClientNotification;
use App\Models\StudentModel;
use App\Models\UserModel;
use App\Services\LoginService;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Psr\Log\LoggerInterface;

class UserController extends BaseController
{
    /**
     * @var $_clientNotification ClientNotification
     */
    public $_clientNotification;
    /**
     * @var $_loginService LoginService
     */
    public $_loginService;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger); // TODO: Change the autogenerated stub
        $this->_clientNotification = new ClientNotification();
        $this->_loginService = Services::login();
    }

    public function login(){
        if(!$this->request->is('post')) return View('user/login');
        $data = $this->request->getPost();
        $userModel = new UserModel();
        $user = $userModel->where('username', $data['username'])->orWhere('email', $data['username'])->first();
        if(!$user) throw new \Exception("Invalid username");
        $this->_loginService->Login($data['password'], $user);
        return redirect()->to('/');
    }

    public function logout(){
        $this->loginService->logout();
        return redirect()->to('/user/login');
    }


    public function create(){
        $user = new User();
        $user->name = 'Sujan Sapkota';
        $user->username = 'code.sujan';
        $user->email = 'sujan@gmail.com';
        $user->setPassword('Sujan@#');
        $model = new UserModel();
        $model->insert($user);
        $this->_clientNotification->addSuccessMessage("User created successfully");
        return redirect()->to('/');
    }

}