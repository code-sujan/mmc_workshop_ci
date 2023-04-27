<?php

namespace App\Services;

use App\Entity\Subject;
use App\Models\SubjectModel;

class SubjectService
{
    public function createSubject(Subject $subject){
        $model = new SubjectModel();
        $existingData = $model->where('name', $subject->name)->first();
        if($existingData) throw new \Exception("Subject with name already exists");
        $model->insert($subject);
    }

}