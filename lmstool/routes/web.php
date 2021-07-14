<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegisterController;
use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherRegisterController;
use App\Http\Controllers\TeacherLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnrollsController;
use App\Http\Controllers\SearchController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// // For loading the home page
// Route::get('/', function () {
//     return view('home');
// });


// //For instructor homepage
// Route::get('/teaching', function () {
//     return view('teacher.teaching');
// });

//For loading the Homepages
Route::get('/',[HomeController::class,'showStudentHomepage']);
Route::get('/teaching',[HomeController::class,'showTeacherHomepage']);

//For Student Login
Route::get('/login/student',[StudentLoginController::class,'show'])->name('student.login');
Route::post('/login/student',[StudentLoginController::class,'login']);
Route::get('/logout/student',[StudentLoginController::class,'logout']);

//For Student Register
Route::get('/join/student',[StudentRegisterController::class,'show'])->name('student.register');
Route::post('/join/student',[StudentRegisterController::class,'register']);

//For forgot password for student
Route::get('/forgotpassword', function () {
    return view('student.forgot');
});


//For instructor Register
Route::get('/join/instructor',[TeacherRegisterController::class,'show'])->name('teacher.register');
Route::post('/join/instructor',[TeacherRegisterController::class,'register']);

//For Instructor Login
Route::get('/login/instructor',[TeacherLoginController::class,'show'])->name('teacher.show');
Route::post('/login/instructor',[TeacherLoginController::class,'login'])->name('teacher.login');
Route::get('/logout/instructor',[TeacherLoginController::class,'logout'])->name('teacher.logout');

//For forgot password for Teachers  
Route::get('/teaching/forgotpassword', function () {
    return view('teacher.forgotpassword');
});

//Uploading course
Route::get('/upload',[CourseController::class,'show'])->middleware('auth');
Route::post('/upload',[CourseController::class,'store']);
Route::get('/courses/{course}',[UserController::class,'showCourse'])->name('course');

Route::get('/design/courses',[HomeController::class,'showDesign']);
Route::get('/development/courses',[HomeController::class,'showDevelopment']);
Route::get('/music/courses',[HomeController::class,'showMusic']);
Route::get('/photography/courses',[HomeController::class,'showPhotography']);
Route::get('/writing/courses',[HomeController::class,'showWriting']);
Route::get('/marketing/courses',[HomeController::class,'showMarketing']);
Route::get('/itsoftware/courses',[HomeController::class,'showItandSoftware']);
Route::get('/business/courses',[HomeController::class,'showBusiness']);


Route::get('/teacher/welcome',function(){
    return view('teacher.teacher_welcome');
})->middleware('auth');

Route::get('/studentdashboard',[StudentDashboardController::class,'show']);

// Route::get('/upload',function(){
//     return view('uploadcourse');
// });

Route::get('/sidebar',function(){
    return view('layout.sidebar');
});

//For Profiles
Route::get('/profiles/{user}',[ProfileController::class,'show'])->name('profile');
Route::get('/profiles/{user}/edit',[ProfileController::class,'edit'])->name('profile.edit');
Route::patch('/profiles/{user}/update',[ProfileController::class,'update'])->name('profile.update');



Route::get('/mycourses/{user}',[CourseController::class,'showmycourses'])->name('mycourses');
Route::get('/mycourses/{id}/edit',[CourseController::class,'edit'])->name('course.edit');
Route::patch('/mycourses/{id}/update',[CourseController::class,'update'])->name('course.update');
Route::post('course/{courseId}/follow',[CourseController::class,'enroll'])->name('course.follow');
Route::post('course/{courseId}/unfollow',[CourseController::class,'remove'])->name('course.unfollow');
Route::get('/mycourses/{id}/delete',[CourseController::class,'delete'])->name('course.delete');

Route::post('/search',[SearchController::Class,'search']);  
