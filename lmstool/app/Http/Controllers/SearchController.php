<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required'
        ]);
        $query = $request->input('query');
        //dd($q);
        $courses=Course::where('course_title','LIKE',"%$query%")
                        ->orWhere('course_subtitle','LIKE',"%$query%")
                        ->get();
        //dd($course);
        return view('searchedresults',compact('courses','query'));
    }
}
