<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StudentDashboardController extends Controller
{
    public function show()
    {
        return view('studashboard');
        // if(Auth::check())
        // {
        //     return view('studashboard');
        // }
        // return 'Failed';
    }
}
