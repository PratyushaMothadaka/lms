{{-- Page to display courses in Design--}}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> WeLearn </title>
        {{-- importing the css file for tailwindcss --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- importing the js file for element-ui --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>

    <body class="font-serif">
        <div id="app" class="overflow-hidden">
            {{-- Part-1 is Navmenu --}}
            @include('layouts.navbar')

            <h1 class="text-center font-bold text-black text-3xl mt-8 mb-8"> Courses in "Photography" </h1>

            @empty($courses)
                <h1 class="text-center font-bold text-red-500 text-xl mt-8 mb-8"> No Courses yet!</h1>
            @endempty

            <div class="grid grid-cols-4 gap-4 mx-6 mt-24">  
            @foreach($courses as $course)
            @if($course->course_category=='Photography')
                <div class="flex items-center justify-center mb-32">
                    <el-card class="group hover:shadow-xl border border-gray-300 mx-auto" style="width: 300px">
                        <el-link href="{{ route('course',$course->id) }}" class="outline-none">
                            <img src="/storage/{{ $course->course_image }}" alt="image" style="height: 200px ; width: 300px">
                        <div class="px-3 py-6">
                            <h1 class="text-center font-bold">{{ $course->course_title }}</h1>
                        </div>
                        </el-link>
                    </el-card>
                 </div>
            @endif
            @endforeach
            </div>
            
            {{-- Footer --}}
            @include('layouts.footer')
        </div>
    </body>
</html>
