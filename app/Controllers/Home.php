<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Home extends BaseController
{
    public function insert(){
        $data = [
            "Student_Name" =>$this->request->getVar("Student_Name"),
            "Student_Email" =>$this->request->getVar("Student_Email"),
            "Student_Password" =>$this->request->getVar("Student_Password")
        ];

        $model = new StudentModel();
        $model->insert($data);
        echo "<h1>Data Inserted Successfully...</h1>";
    
    }
    public function index(): string
    {
        return view('welcome_message');
    }

    
    
}
