<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class APIStudentController extends Controller
{
    public function store(Request $request)
    {
        $student= new Student;
        $student->name=$request->input('name');
        $student->course=$request->input('course');
        $student->email=$request->input('email');
        $student->phone=$request->input('phone');
        $student->save();

        return response()->json([
            'status'=>200,
            'message'=>'Student Added Sucessfully',
        ]);
    }
    public function index()
    {
       $students = Student::all();
       return response()->json([
       'status'=>200,
       'message'=>$students,
       ]);
    }
}
