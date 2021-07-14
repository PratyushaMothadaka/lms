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
            {{-- Part-1 is Navmenu --}}
            @include('layouts.teach_navbar')
            @if(session()->has('message'))
                <div class="bg-green-200 border border-green-300">
                    <p class="px-4 py-2 text-green-500 text-xl text-center font-bolld">
                     {{ session()->get('message') }}
                    </p>
                </div>
            @endif
            <div class="bg-white mx-auto mt-20 border border-gray-300 w-2/3 shadow-2xl">
                <h1 class="py-8 text-center text-2xl font-bold"> Edit your Profile Here</h1>
            </div>
            <el-form class="bg-white border border-gray-300 mx-auto mb-32 px-8 py-6 w-2/3 shadow-2xl" action="{{ route('profile.update',auth()->user()) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <el-form-item label="Full Name" for="name" class="mb-5">
                    <input type="text"   
                            name="name" 
                            id="name"
                            value="{{ Auth::user()->name }}"
                            class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-black" readonly>
                </el-form-item>
                <el-form-item label="Email Address" for="email" class="mb-5">
                    <input type="email" 
                                name="email" 
                                id="email" 
                                value="{{ Auth::user()->email }}"
                                class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-black" readonly>
                </el-form-item>
                <el-form-item label="Upload your Profile Image" for="avatar" class="mb-5">
                    <input type="file" 
                                id="avatar" 
                                name="avatar" 
                                class="mt-2 border border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-black">
                </el-form-item>
                <el-form-item label="Designation" for="designation" class="mb-5">
                    <input type="designation" 
                                name="designation" 
                                id="designation" 
                                value="{{ Auth::user()->designation }}"
                                class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                </el-form-item>
                <el-form-item label="Tagline" for="tagline" class="mb-5">
                    <input type="tagline" 
                                name="tagline" 
                                id="tagline" 
                                value="{{ Auth::user()->tagline }}"
                                class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                </el-form-item>
                <el-form-item label="Your Bio" for="bio" class="mb-5">
                    <input type="bio" 
                                name="bio" 
                                id="bio" 
                                value="{{ Auth::user()->bio }}"
                                class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                </el-form-item>
                <el-form-item label="Your Skills" for="skills" class="mb-5">
                    <textarea type="textarea" 
                            name="skills" 
                            id="skills"
                            class="mt-2 border-b border-gray-500 px-4 py-2 w-full outline-none focus:border-blue-400 placeholder-gray-600">
                        {{ old('skills',Auth::user()->skills) }}
                    </textarea>
                </el-form-item>
                <div class="flex justify-between my-12">
                    <el-link href="/teacher/welcome" class="bg-red-500 border border-red-500 text-white font-bold hover:bg-white hover:text-red-500 hover:border-red-500 hover:font-bold px-10 py-4 focus:outline-none">Take me back</el-link>
                    <el-button native-type="submit" class="bg-blue-500 border border-blue-500 text-white font-bold hover:bg-blue-700 hover:border-blue-700 hover:font-bold px-10 py-4 focus:outline-none">Update My Profile</el-button>
                </div>
            </el-form>

            <div class="mb-32"></div>
            @include('layouts.footer')
        </div>
    </body>
</html>
