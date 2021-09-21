<?php

namespace App\Http\Controllers;

use App\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function create(){

        return view('students.create');
    }


    public function store(Request $request){

        $student =new students();
        $student->student_name=$request->student_name;
        $student->father_name=$request->father_name;
        $student->fathers_email=$request->fathers_email;
        $student->mobile=$request->mobile;


        $student->save();
        return redirect()->route('student_create');


    }


}
