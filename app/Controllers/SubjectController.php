<?php

namespace App\Controllers;

use App\Entity\Subject;
use App\Models\SubjectModel;
use App\Services\SubjectService;
use Config\Database;
use Config\View;

class SubjectController extends BaseController
{
    public function index(){
//        $db = Database::connect();
//        $query = $db->query("select * from subject");
//        $list = $query->getResultArray();

        $model = new SubjectModel();
        $list = $model->findAll();
        return View('subject/index', ['subjects' => $list]);
    }

    public function new(){
        $session = session();
        try {
            if(!$this->request->is('post')) return View('subject/new');
            $data = $this->request->getPost();
//        $db = Database::connect();
//        $db->table('subject')->insert($data);
            $subject = new Subject();
            $subject->name = $data['name'];
            $subject->description =$data['description'];
            $subjectService = new SubjectService();
            $subjectService->createSubject($subject);
            $session->setFlashdata('message', 'Subject added successfully');
            return redirect()->to('/subject');
        }
        catch (\Exception $e){
            $session->setFlashdata('message', $e->getMessage());
            return redirect()->to('/subject');
        }
    }
}