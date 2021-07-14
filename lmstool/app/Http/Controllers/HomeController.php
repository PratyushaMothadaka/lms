<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    //To display Home Page
    public function showStudentHomepage()
    {
        return view('home',[
            'courses' => Course::all()
        ]);
    }

    //To display Teacher Homepage
    public function showTeacherHomepage()
    {
        return view('teacher.teaching',[
            'courses' => Course::all()
        ]);
    }

    //To display Courses under Design
    public function showDesign()
    {
        return view('categories.design',[
            'courses' => Course::all()
        ]);
    }

    //To show courses under Developemnt
    public function showDevelopment()
    {
        return view('categories.development',[
            'courses' => Course::all()
        ]);
    }

    //To show courses under Business
    public function showBusiness()
    {
        return view('categories.business',[
            'courses' => Course::all()
        ]);
    }

    //To show courses under Music
    public function showMusic()
    {
        return view('categories.music',[
            'courses' => Course::all()
        ]);
    }

    //To show the courses under IT and software
    public function showItandSoftware()
    {
        return view('categories.itandsoftware',[
            'courses' => Course::all()
        ]);
    }

    //To show courses under Writing
    public function showWriting()
    {
        return view('categories.writing',[
            'courses' => Course::all()
        ]);
    }

    //To show courses under Photography
    public function showPhotography()
    {
        return view('categories.photography',[
            'courses' => Course::all()
        ]);
    }

    //To show courses under Marketing
    public function showMarketing()
    {
        return view('categories.marketing',[
            'courses' => Course::all()
        ]);
    }

}
