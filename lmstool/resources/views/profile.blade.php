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
    <body class="font-serif">
        <div id="app" class="overflow-hidden">
            {{-- Part-1 is Navmenu --}}
            @include('layouts.navbar')
            <div class="w-3/5 bg-green-200 flex items-center justify-center mx-auto mt-16 border border-green-300 py-10">
                <div class="mr-20">
                    <el-image src="/storage/{{ $user->avatar }}" style="height:250px ; width:250px" class="shadow-xl px-2 py-2 bg-white"></el-image>
                </div>
                <div class="py-8">
                    <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
                    <h1 class="text-lg font-bold mb-6">{{ $user->designation }}</h1>
                    <h1 class="text-xl font-bold mb-2">Email: {{ $user->email }}</h1>
                </div>
            </div>
            <div class="h-1/5 w-3/5 bg-white px-8 py-4 mx-auto mt-8 border border-green-400">
                <h1 class="text-3xl font-bold text-center mt-3 mb-4">Individual Profile Card</h1>
                <div class="flex items-center justify-between">
                    <div class="py-8">
                        <h1 class="font-bold text-gray-600">Name</h1>
                        <h1 class="text-lg font-bold mb-4">{{ $user->name }}</h1>
                        <h1 class="font-bold text-gray-600">Email Address</h1>
                        <h1 class="text-lg font-bold mb-4">{{ $user->email }}</h1>
                    </div>
                    <div class="py-8">
                        <h1 class="font-bold text-gray-600">Designation</h1>
                        <h1 class="text-lg font-bold mb-4">{{ $user->designation }}</h1>
                        <h1 class="font-bold text-gray-600">Expertise</h1>
                        <h1 class="text-lg font-bold mb-4">{{ $user->skills }}</h1>
                    </div>
                </div>
            </div>
            <div class="h-1/5 w-3/5 bg-white px-8 py-4 mx-auto mt-8 border border-green-400">
                    <div class="py-8">
                        <h1 class="font-bold text-gray-600">Bio</h1>
                        <h1 class="text-lg font-bold mb-4 text-justify">{{ $user->bio }}</h1>
                    </div>
            </div>
    
            <div>
                @include('layouts.enrolledcourses')
            </div>
            <div>
                @include('layouts.useruploads')
            </div>
            
            <div class="mb-32"></div>

            @include('layouts.footer')

        </div>
    </body>
</html>


