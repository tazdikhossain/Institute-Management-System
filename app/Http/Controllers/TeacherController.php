<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

use App\Models\Courses;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }



    public function teacherCreate()
    {
        return view('pages.teacher.teacherCreate');
    }

    public function teacherCreateSubmitted(Request $request)
    {
        $teacher = new Teacher();
        
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->save();

        return $teacher;
    }

    public function teacherList()
    {
        $teachers = Teacher::all();
        return view('pages.teacher.teacherList')->with('teachers', $teachers);
    }

    public function teacherCourses()
    {
        $t = Teacher::where('id', 1)->first();
        return $t->courses;
        // return $t->assignedCourses();
    }

}
