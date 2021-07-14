{{-- Homepage for the teacher--}}
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
            @include('layouts.teach_navbar')
            <div class="flex">
                @include('layouts.sidebar')
                <div class="w-3/4 px-5 py-5">
                    <div>
                        Welcome {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
