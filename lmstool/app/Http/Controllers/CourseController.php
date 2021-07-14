<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Course;
use Auth;
use DB;

class CourseController extends Controller
{
    public function show()
    {
        $courses=Course::orderBy('created_at','DESC');
        return view('uploadcourse');
    }
    
    public function store(Request $request)
    {
        $this->validate(request(),[
            'course_title' => 'required',
            'course_subtitle' => 'required',
            'course_description' => 'required',
            'course_language' => 'required',
            'course_difficulty' => 'required',
            'course_category' => 'required',
            'course_summary' => 'required',
            'course_prerequisites' => 'required',
            'course_learners' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:20000',
            'video' => 'required|file|mimes:mp4'
        ]);
        // $user_id=Auth::user()->id();
        $image_upload=$request->file('image');
        $course_image=$image_upload->store('course_images');
        $video_upload=$request->file('video');
        $course_video=$video_upload->store('course_videos');
        // $course=Course::Create();
        Course::Create([
                'user_id' => Auth::user()->id,
                'course_title' =>request('course_title'),
                'course_subtitle' =>request('course_subtitle'),
                'course_description' =>request('course_description'),
                'course_language' =>request('course_language'),
                'course_difficulty' =>request('course_difficulty'),
                'course_category' =>request('course_category'),
                'course_summary' =>request('course_summary'),
                'course_prerequisites' =>request('course_prerequisites'),
                'course_learners' =>request('course_learners'),
                'course_image' => $course_image,
                'course_video' => $course_video
            ]);
        return redirect('/upload')->with('message','Uploaded Successfully');
    }

    public function enroll(int $courseId)
    {
        $course = Course::find($courseId);
        if(! $course) {
            return 'failed'; 
        }
        $course->enrolls()->attach(auth()->user()->id);
        return redirect()->back()->with('message','You enrolled for the course successfully!');
    }

    public function remove(int $courseId)
    {
        $course = Course::find($courseId);
        if(! $course) {
            return 'failed'; 
        }
        $course->enrolls()->detach(auth()->user()->id);
        return redirect()->back()->with('message','You removed the course successfully!');
    }
    
    public function showmycourses(User $user)
    {
        return view('mycourses', compact('user'));
    }

    public function edit(Course $course,int $id)
    {
        return view('editcourse',compact('course','id'),[
            'courses' => Course::all()
        ]);
    }
    public function update(int $id,Course $course,Request $request)
    {
        $course = Course::find($id);
        if($course)
        {
            $validate = $request->validate([
                'course_title' => 'required',
                'course_subtitle' => 'required',
                'course_description' => 'required',
                'course_language' => 'required',
                'course_difficulty' => 'required',
                'course_category' => 'required',
                'course_summary' => 'required',
                'course_prerequisites' => 'required',
                'course_learners' => 'required',
                'image' => 'required|file|mimes:jpg,jpeg,png|max:20000',
                'video' => 'required|file|mimes:mp4'
            ]);
            $course->user_id = Auth::user()->id;
            $course->course_title = $request['course_title'];
            $course->course_subtitle = $request['course_subtitle'];
            $course->course_description = $request['course_description'];
            $course->course_language = $request['course_language'];
            $course->course_difficulty = $request['course_difficulty'];
            $course->course_category = $request['course_category'];
            $course->course_summary = $request['course_summary'];
            $course->course_prerequisites = $request['course_prerequisites'];
            $course->course_learners = $request['course_learners'];
            $image_upload=$request->file('image');
            $course->course_image=$image_upload->store('course_images');
            $video_upload=$request->file('video');
            $course->course_video=$video_upload->store('course_videos');
            $course->save();
            return redirect()->back()->with('message','Updated your Course successfully!');
        }
    }

    public function delete($id)
    {
        DB::table('courses')->where('id',$id)->delete();
        return redirect('/')->with('message','Deleted your Course successfully!');
    }
}
