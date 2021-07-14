<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Follows;
use Auth;

class UserController extends Controller
{
    public function showCourse(Course $course,User $user)
    {
        // return $course;
        return view('courses.show',compact('course','user'));
    }
}
