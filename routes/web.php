<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

Route::get('/', function () 
{
    return view('welcome');
}
);


Route::get('/hello', function () 
{
    return "Hello";
}
);

Route::get('/helloo', function () 
{
    return '<h1>Hello</h1>';
}
);

//Route::get('/hellooo', [PagesController::class, 'index']);

Route::get('/hellooo', [PagesController::class, 'index'])->name('hello');


Route::get('/profile', [PagesController::class, 'profile'])->name('profile');


Route::get('/user/{id}', function($id)
{
    return "<b> The Passed id is" .$id."</b>";
});


Route::get('/studentList', [StudentController::class, 'studentList'])->name('studentList');

Route::get('/studentCreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate', [StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');

Route::get('/studentEdit/{id}/{name}', [StudentController::class, 'studentEdit'])->name('studentEdit');
Route::post('/studentEdit', [StudentController::class, 'studentEditSubmitted'])->name('studentEdit');

Route::get('/studentDelete/{id}/{name}', [StudentController::class, 'studentDelete'])->name('studentDelete');



Route::get('/teacherCreate', [TeacherController::class, 'teacherCreate'])->name('teacherCreate');
Route::post('/teacherCreate', [TeacherController::class, 'teacherCreateSubmitted'])->name('teacherCreate');


Route::get('/teacherList', [TeacherController::class,'teacherList'])->name('teacherList');
Route::get('/teacher/courses',[TeacherController::class, 'teacherCourses'])->name('teacherCourses');
Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses');