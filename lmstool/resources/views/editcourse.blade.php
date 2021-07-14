<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> WeLearn </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- importing the css file for tailwindcss --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- importing the js file for element-ui --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body class="font-serif bg-gray-100">
        <div id="app" class="overflow-hidden">
            @include('layouts.teach_navbar')
            @if(session()->has('message'))
                <div class="bg-green-200 border border-green-300">
                    <p class="px-4 py-2 text-green-500 text-xl text-center font-bolld">
                     {{ session()->get('message') }}
                    </p>
                </div>
            @endif
            <div class="bg-white mx-auto mt-20 border-b border-gray-300 w-2/3">
                <h1 class="py-8 text-center text-2xl font-bold"> Edit your Course</h1>
            </div>
            <el-form class="bg-white mx-auto mb-32 px-8 py-6 w-2/3 shadow-2xl" action="{{ route('course.update',$id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <el-form-item label="Course Title" for="course_title" class="mb-5">
                    <input type="text" 
                            v-model="course_title"  
                            name="course_title" 
                            id="course_title"
                            class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600" required>
                </el-form-item>
                <el-form-item label="Course Subtitle" for="course_subtitle" class="mb-5">
                        <input type="text" 
                                v-model="course_subtitle" 
                                name="course_subtitle" 
                                id="course_subtitle" 
                                maxlength="100" show-word-limit
                                class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                    </el-form-item>
                    <el-form-item label="Course Description" for="course_description" class="mb-5">
                            <textarea type="textarea" 
                                    v-model="course_description" 
                                    name="course_description" 
                                    id="course_description" 
                                    class="mt-2 border border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                            </textarea>
                    </el-form-item>
                    <div class="flex justify-between">
                    <el-form-item class="mb-5">
                        <label for="course_language">Choose Language</label>
                        <select name="course_language" id="course_language" class="border border-gray-500 px-2 py-2">
                            <option value="english">English</option>
                            <option value="spanish">Spanish</option>
                            <option value="french">French</option>
                            <option value="chinese">Chinese</option>
                            <option value="hindi">Hindi</option>
                        </select>
                    </el-form-item>
                    <el-form-item class="mb-5">
                        <label for="course_difficulty">Choose Difficulty</label>
                        <select name="course_difficulty" id="course_difficulty" class="border border-gray-500 px-2 py-2">
                            <option value="beginner">Beginner Level</option>
                            <option value="intermediate">Intermediate Level</option>
                            <option value="advanced">Advanced Level</option>
                        </select>
                    </el-form-item>
                    <el-form-item class="mb-5">
                        <label for="course_category">Choose Category</label>
                        <select name="course_category" id="course_category" class="border border-gray-500 px-2 py-2">
                            <option value="design">Design</option>
                            <option value="development">Development</option>
                            <option value="marketing">Marketing</option>
                            <option value="itsoftware">IT and Software</option>
                            <option value="writing">Writing</option>
                            <option value="photography">Photography</option>
                            <option value="business">Business</option>
                            <option value="music">Music</option>
                        </select>
                    </el-form-item>
                    </div>
                    <el-form-item label="What will students learn from this course?" for="course_summary" class="mb-5">
                        <textarea type="textarea"
                            v-model="course_summary" 
                            name="course_summary" 
                            id="course_summary"
                            class="mt-2 border border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                        </textarea>
                    </el-form-item>
                    <el-form-item label="What are the pre-requisites of this course?" for="course_prerequisites" class="mb-5">
                        <textarea type="textarea" 
                            v-model="course_prerequisites" 
                            name="course_prerequisites" 
                            id="course_prerequisites"
                            class="mt-2 border border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                        </textarea>
                    </el-form-item>
                    <el-form-item label="Who is this course for?" for="course_learners" class="mb-5">
                        <input type="text" 
                            v-model="course_learners" 
                            name="course_learners" 
                            id="course_learners"
                            class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                    </el-form-item>
                    <el-form-item class="mb-5">
                        <label for="course_image">Upload your Course Image</label>
                        <input type="file" id="course_image" name="image">
                    </el-form-item>
                    <el-form-item class="mb-5">
                        <label for="course_video">Upload your Course Video</label>
                        <input type="file" id="course_video" name="video">
                    </el-form-item>
                <div class="flex justify-between my-12">
                    <el-link href="/teacher/welcome" class="bg-red-500 border border-red-500 text-white font-bold hover:bg-red-700 hover:text-white hover:border-red-700 hover:font-bold px-10 py-4 focus:outline-none">Take me back</el-link>
                    <el-button native-type="submit" class="bg-blue-500 border border-blue-500 text-white font-bold hover:bg-blue-700 hover:border-blue-700 hover:font-bold px-10 py-4 focus:outline-none">Update Course</el-button>
                </div>
            </el-form>
            <div class="mb-32"></div>
            @include('layouts.footer')
        </div>
    </body>
    {{-- <script src="js/uploadcourse.js" defer></script> --}}
</html>