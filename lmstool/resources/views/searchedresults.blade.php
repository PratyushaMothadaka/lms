{{-- Homepage that is visible for the student --}}
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

            @if(count($courses)>0)
            <div>
                <h1 class="text-3xl text-center font-bold my-16">Results of your search for "{{ $query }}"</h1>
            </div>
            @endif

            <div class="grid grid-cols-4 gap-4 mx-6">                
                @foreach($courses as $course)
                    <el-card class="group hover:shadow-2xl border border-gray-300 mx-auto" style="width: 300px">
                        <el-link href="{{ route('course',$course->id) }}" class="outline-none">
                            <img src="/storage/{{ $course->course_image }}" alt="image" style="height:200px ; width: 300px">
                            <div class="px-6 py-6">
                                <h1 class="text-center font-bold">{{ $course->course_title }}</h1>
                            </div>
                        </el-link>
                    </el-card>
                @endforeach
            </div>

            <div class="mb-32"></div>
            {{-- Footer --}}
            @include('layouts.footer')
        </div>
    </body>
</html>