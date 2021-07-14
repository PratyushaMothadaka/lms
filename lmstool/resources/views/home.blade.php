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

            {{-- Part-2 --}}
            <div style="background-image:url('/images/data.jpg'); width:1355px; height:400px"
                 class="bg-cover bg-center mx-auto py-20 shadow-lg">
                 <div class="container w-1/3 bg-white ml-12 p-6 shadow-lg">
                     <h1 class="text-4xl text-black font-bold">A better learning future starts here</h1>
                     <p class="text-2xl">Browse your course, anytime. Be the best you can be.</p>
                 </div>
            </div>
            {{-- Part-3 --}}
            {{-- Features --}}
            <div class="flex flex-col items-center justify-center mx-auto mt-10 mb-10">
                <div>
                    <h1 class="text-4xl font-bold">A best way to e-Learn for Anyone, Anywhere !</h1>
                </div>
                <div>
                    <p class="text-xl font-bold text-blue-900">Committed To Excellence In <span class="text-red-600 font-bold italic">e-</span>Learning</p>
                </div>
            </div>

            <div class="flex items-center justify-center mx-auto mt-10 mb-32">
                <div class="bg-blue-100 px-4 py-4 mx-6 shadow-2xl hover:bg-gray-300 rounded-lg" style="height:180px ; width:250px">
                    <img src="/images/idea.jpg" class="h-16 w-16 mx-auto mb-4 rounded-full">
                    <h1 class="text-gray-900 text-2xl font-bold text-center">Learn the latest skills</h1>
                </div>
                <div class="bg-blue-100 px-4 py-4 mx-6 shadow-2xl hover:bg-gray-300 rounded-lg" style="height:180px ; width:250px">
                    <img src="/images/teach.jpg" class="h-16 w-16 mx-auto mb-4 rounded-full">
                    <h1 class="text-gray-900 text-2xl font-bold text-center">Get ready for a career</h1>
                </div>
                <div class="bg-blue-100 px-4 py-4 mx-6 shadow-2xl hover:bg-gray-300 rounded-lg" style="height:180px ; width:250px">
                    <img src="/images/certify.jpg" class="h-16 w-16 mx-auto mb-4 rounded-full">
                    <h1 class="text-gray-900 text-2xl font-bold text-center">Earn a certificate or degree</h1>
                </div>
                <div class="bg-blue-100 px-4 py-4 mx-6 shadow-2xl hover:bg-gray-300 rounded-lg" style="height:180px ; width:250px">
                    <img src="/images/community.jpg" class="h-16 w-16 mx-auto mb-4 rounded-full">
                    <h1 class="text-gray-900 text-2xl font-bold text-center">Upskill your organization</h1>
                </div>
            </div>

            {{-- Part-4 --}}
            {{-- Teach Here Card --}}
            <div class="bg-orange-200 flex items-center justify-center mx-auto mt-16 mb-32" style="height:300px">
                <div style="height: 400px ; width: 400px" class="mr-20">
                    <el-image src="/images/instruct.jpg" style="height:400px ; width:400px" class="shadow-xl"></el-image>
                </div>
                <div style="height: 400px ; width: 400px" class="py-24">
                    <h1 class="text-3xl font-bold mb-2">Become an Instructor</h1>
                    <p class="text-lg text-left mb-8">Top instructors from around the world teach millions of students. We provide the tools and skills to teach what you love. </p>
                    <el-link href="{{ url('/teaching') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-4 rounded focus:outline-none">Start Teaching Today</el-link>
                </div>
            </div>

            <div class="mx-auto bg-gray-100 border-t border-b border-gray-200" style="height:140px">
                <div class="container mx-auto flex items-center justify-center" style="height:140px ; width:900px">
                    <h1 class="text-gray-400 text-center text-3xl font-bold italic">
                        <span class="text-gray-300 text-4xl">"</span>
                            Choose from 130,000 online video courses with new additions published every month
                        <span class="text-gray-300 text-4xl">"</span>
                    </h1>
                </div>
            </div>

            {{-- Learn today card --}}
            <div class="bg-teal-900 flex items-center justify-center text-white mx-auto my-32" style="height:300px">
                <div style="height: 400px ; width: 400px" class="py-24">
                    <h1 class="text-3xl font-bold mb-2">Start Learning today</h1>
                    <p class="text-lg text-left mb-8">Get unlimited access to 4,000+ top courses and enjoy learning anytime, anywhere.</p>
                    @if(Auth::guest())
                        <el-link href="{{ url('/join/student') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-4 rounded focus:outline-none">Start Learning Today</el-link>
                    @else
                        <el-link href="{{ url('/') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-4 rounded focus:outline-none">Start Learning Today</el-link>
                    @endif
                </div>
                <div style="height: 400px ; width: 400px" class="ml-20">
                    <el-image src="/images/learn.jpg" style="height:400px ; width:400px" class="shadow-xl"></el-image>
                </div>
            </div>

            {{-- Part-5 Top Categories --}}
            <div>
                <h1 class="text-3xl text-center font-bold mb-16">The world's largest selection of courses</h1>
            </div>
            <div class="flex items-center justify-center mb-10">
                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/design/courses" class="outline-none" :underline="false">
                        <el-image src="/images/design.png" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">Design</h1>
                        </div>
                    </el-link>
                </el-card>

                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/development/courses" class="outline-none">
                        <el-image src="/images/dev.jpg" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">Development</h1>
                        </div>
                    </el-link>
                </el-card>

                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/marketing/courses" class="outline-none">
                        <el-image src="/images/marketing.jpg" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">Marketing</h1>
                        </div>
                    </el-link >
                </el-card>

                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/itsoftware/courses" class="outline-none">
                        <el-image src="/images/it.jpg" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">IT and Software</h1>
                        </div>
                    </el-link>
                </el-card>
            </div>
            <div class="flex items-center justify-center mb-22">
                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/writing/courses" class="outline-none">
                        <el-image src="/images/writing.jpg" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">Writing</h1>
                        </div>
                    </el-link>
                </el-card>
   
                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/photography/courses" class="outline-none">
                        <el-image src="/images/photography.jpg" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">Photography</h1>
                        </div>
                    </el-link>
                </el-card>

                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/business/courses" class="outline-none">
                        <el-image src="/images/business.jpg" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">Business</h1>
                        </div>
                    </el-link>
                </el-card>

                <el-card class="group hover:shadow-xl border border-gray-300 mx-3">
                    <el-link href="/music/courses" class="outline-none">
                        <el-image src="images/music.jpg" style="height: 300px ; width: 300px"></el-image>
                        <div class="px-6 py-6">
                            <h1 class="text-center font-bold">Music</h1>
                        </div>
                    </el-link>
                </el-card>
            </div>
            
            @include('layouts.uploadedcourses')

            <div class="mb-32"></div>
            {{-- Footer --}}
            @include('layouts.footer')
        </div>
    </body>
</html>