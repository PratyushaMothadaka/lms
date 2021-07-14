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
            @include('layouts.navbar')

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