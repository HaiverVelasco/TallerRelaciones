<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function ConsultasElokuent(){
        $Student = Student::find(1);
        return $Student;

        
    }
}
