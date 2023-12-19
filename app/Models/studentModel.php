<?php
namespace App\Models;
use CodeIgniter\Model;

    class StudentModel extends Model{
        protected $table = "student_data";
        protected $allowedFields = ["Student_Name","Student_Email","Student_Password"];
    }
    

?>