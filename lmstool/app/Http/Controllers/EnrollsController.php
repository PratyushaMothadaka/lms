<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class EnrollsController extends Controller
{
    public function enroll(Course $course)
    {
        if(auth()->user()->following($course))
        {
            auth()->user()->remove($course);
        }
        else
        {
            auth()->user()->follow($course);
        }
        return redirect()->back();
    }
}
