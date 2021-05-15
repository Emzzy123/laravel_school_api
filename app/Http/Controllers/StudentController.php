<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    function addstudent(Request $req)
    {
        $student= new Student;
        $student->name=$req->input('name');
        $student->student_id=$req->input('student_id');
        $student->course_name=$req->input('course_name');
        $student->faculty=$req->input('faculty');
        $student->file_path=$req->file('file')->store('students');
        $student->save();
        return $student;


    }

}