<?php

namespace App\Http\Controllers;

use App\attendence;
use App\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;

class AttendenceController extends Controller
{
    public function create(){

        $students=students::all();
        return view('attendence.create',['students'=>$students]);
    }

    Public function store(Request $request){

        foreach ($request->students_id as $key=>$studentId){

            $attendence= new attendence();
            $attendence->is_present = isset($request->is_present[$key])? $request->is_present[$key]:'no';
            $attendence->students_id =$studentId;
            $attendence->save();
            $student = students::find($studentId);
            if($student && $student->fathers_email) {
                $data = [
                    'to' => $student->fathers_email ,
                    'from' => 'sayem243@gmail.com',
                    'subject' => 'student Attendance Notification',
                    'student_name' => $student->student_name,
                ];

                $notification=array(
                    'messege'=>'Successfully Added',
                    'alert-type'=>'success'
                );
                try {
                    Mail::send('students.email-for-attendence', ['data' => $data], function ($email) use ($data) {
                        $email->from($data['from'])->to($data['to'])->subject($data['subject']);
                    });
                }
                catch(\Exception $exp){
                    //return $exp->getMessage();
                }
            }
        }
        //return redirect()->route('attendence_create');
        return redirect()->back()->with($notification);

    }
}
