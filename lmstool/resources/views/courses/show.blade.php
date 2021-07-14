<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teach with WeLearn </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- importing the css file for tailwindcss --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- importing the js file for element-ui --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <script src="/js/home.js" defer></script>
    </head>

    <body class="font-serif">
        <div id="app" class="overflow-hidden">
            {{-- Part-1 is Navmenu --}}
            @include('layouts.teach_navbar')
            @if(session()->has('message'))
            <div class="bg-green-200 border border-green-300">
                <p class="px-4 py-2 text-green-500 text-xl text-center font-bolld">
                 {{ session()->get('message') }}
                </p>
            </div>
            @endif
            <div class="flex bg-yellow-300 px-10">
                <div class="mx-8 py-10">
                    <p class="text-sm font-bold mb-4">Category > {{ $course->course_category }}</p>
                    <p class="text-3xl font-bold mb-2">{{ $course->course_title }}</p>
                    <p class="text-xl mb-2">{{ $course->course_subtitle }}</p>
                    <p class="text-sm font-bold">
                        Created by <a class="underline text-teal-700 font-bold" href="{{ route('profile',$course->CreatedUser->name) }}">{{ $course->CreatedUser->name}}</a>
                    </p>
                    <p>Last Updated:{{ $course->created_at }}</p>
                    <p>Language:{{ $course->course_language }}</p>
                    <p>Difficulty Level:{{ $course->course_difficulty }}</p>
                </div>
                <div class="my-auto mx-auto bg-white">
                    <el-card class="border border-gray-500 px-1 py-1">
                        <video width="500" height="500" class="border-2 border-black" controls
                            poster="/storage/{{ $course->course_image }}">
                            <source src="/storage/{{ $course->course_video }}" type="video/mp4" alt="video">
                        </video>
                    <div class="mx-auto my-auto mt-1"> 
                        <center>
                            @if(Auth::user()->id != $course->user_id)
                                @if(auth()->user()->following($course))
                                    <el-form action="{{ route('course.unfollow', $course->id) }}" method="post">
                                    @csrf
                                        <el-button native-type="submit" class="w-full bg-red-500 border border-red-500 text-white font-bold hover:bg-red-700 hover:border-red-700 hover:font-bold px-10 py-4 focus:outline-none">
                                            Remove
                                        </el-button>
                                    </el-form>
                                @else
                                    <el-form action="{{ route('course.follow', $course->id) }}" method="post">
                                    @csrf
                                        <el-button native-type="submit" class="w-full bg-blue-500 border border-blue-500 text-white font-bold hover:bg-blue-700 hover:border-blue-700 hover:font-bold px-10 py-4 focus:outline-none">
                                            Enroll Now
                                        </el-button>
                                    </el-form>
                                @endif
                            @endif
                        </center>
                        <center>
                            @if (Auth::user()->id === $course->user_id)
                            <div class="flex gap-1">
                                    <el-link href="{{ route('course.edit',$course->id) }}" class="w-full bg-green-500 border border-green-500 text-white font-bold hover:bg-green-700 hover:border-green-700 hover:font-bold px-12 py-4 focus:outline-none">Edit Course</el-link>
                                    <el-link href="{{ route('course.delete',$course->id) }}" class="w-full bg-red-500 border border-red-500 text-white font-bold hover:bg-red-700 hover:border-red-700 hover:font-bold px-10 py-4 focus:outline-none">Delete Course</el-link>
                            </div> 
                            @endif
                        </center>
                    </div>
                </el-card>
                </div>
            </div>

            @if(Auth::user()->id != $course->user_id)
                <div class="flex justify-center items-center">
                    <div class="border px-8 py-4 border-gray-300 mr-8 mt-10" style="height:150px;width:300px">
                        <p class="text-center text-lg font-bold pb-2">Your Status</p>
                        <my-progressbar></my-progressbar>
                    </div>
                    <div class="border px-8 py-4 border-gray-300 mt-10" style="height:150px;width:300px">
                        <p class="text-center text-lg font-bold pb-2">Completion Status</p>
                    </div>
                </div>
            @endif
            
            <div class="border px-8 py-4 border-blue-200 bg-blue-100 mx-24 my-10">
                <p class="text-lg font-bold pt-4 pb-2">Description</p>
                <p class="text-justify pt-2 pb-4">{{ $course->course_description }}</p>
            </div>

            <div class="border px-8 py-4 border-blue-200 bg-blue-100 mx-24 my-10">
                <p class="text-lg font-bold pt-4 pb-2">Pre-requisites</p>
                <p class="text-justify pt-2 pb-4">{{ $course->course_prerequisites }}</p>
            </div>

            <div class="border px-8 py-4 border-blue-200 bg-blue-100 mx-24 my-10">
                <p class="text-lg font-bold pt-4 pb-2">Who is this course for?</p>
                <p class="text-justify pt-2 pb-4">{{ $course->course_learners }}</p>
            </div>

            <div class="border px-8 py-4 border-blue-200 bg-blue-100 mx-24 my-10">
                <p class="text-lg font-bold pt-4 pb-2">What do Students Learn?</p>
                 <p class="text-justify pt-2 pb-4">{{ $course->course_summary }}</p>
            </div>

            <div class="mb-32">
            </div>

            @include('layouts.footer')
        </div>
    </body>
</html>