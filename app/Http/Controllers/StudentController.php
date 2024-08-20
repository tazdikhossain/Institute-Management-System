<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{


    public function studentCreate()
    {
        return view('pages.student.studentCreate');
    }


    public function studentCreateSubmitted(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:5|max:10',
            'id' => 'required',
            'dob' => 'required',
            'email' => 'email',
            'phone' => 'required'

        ],
        [
            'name.required' => 'Please put your name',
            'name.min' => 'Name must be at least 5 characters',
            'email.email' => 'Please provide a valid email address',
            'dob.required' => 'Date of birth is required',
            'phone.required' => 'Phone number is required',
            'id.required' => 'ID is required',
        ]
    
    );
        // $student = new Student();
        // $name = $request->name;
        // return $name;

        // Database value insert
        $student = new Student();
        $student->name = $request->name;
        $student->student_id = $request->id;
        $student->email = $request->email;
        $student->save();
        return $student;
        
    }


    // public function studentList()
    // { 
    //     $student = array();

    //     for($i=0; $i<10; $i++)
    //     {
    //         $student = array(
    //             "name" => "Student".($i+1),
    //             "id" => "00".($i+1),
    //             "dob" => "11-11-11"
    //         );
    //         $students[] = (object)$student;
    //     }
    //     return view('pages.student.list')->with('students', $students);
    // }

    // Database connect
    public function studentList()
    { 
        $students = Student::all();
        return view('pages.student.list')->with('students', $students);
        // return $student;
    }


    public function studentEdit(Request $request)
    {
        // $student = student::where('id', $request->id)->first();
        // return $student;

        $student = Student::where('id', $request->id)->first();
        return view('pages.student.studentEdit')->with('student', $student);
    }

    public function studentEditSubmitted(Request $request)
    {

        $student = Student::where('id', $request->id)->first();

        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->email = $request->email;
        $student->save();


       return redirect()->route('studentList');

    // return $request->name;
    }

    public function studentDelete(Request $request)
    {
        $student = Student::where('id', $request->id)->first();
        $student->delete();
        return redirect()->route('studentList');
    }



}
