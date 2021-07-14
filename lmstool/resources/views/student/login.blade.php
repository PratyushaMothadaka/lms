{{-- This is login page for Students --}}
<!DOCTYPE html>
<html>
    <head>
        <title>Online Courses-Teach,Learn & Explore</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- importing the css file for tailwindcss --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- importing the js file for element-ui --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body class="font-serif bg-gray-100">
        <div id="app" class="overflow-hidden">

            @include('layouts.navbar')

            <div class="flex flex-col items-center justify-center mx-auto pt-24">
                @if(session()->has('message'))
                    <div class="bg-green-200 border border-green-300">
                        <p class="px-4 py-2 text-green-500 text-xl text-center font-bolld">
                         {{ session()->get('message') }}
                        </p>
                    </div>
                @endif
                @if(session()->has('error'))
                <div class="bg-red-200 border border-red-300">
                    <p class="px-4 py-2 text-red-500 text-xl text-center font-bolld">
                     {{ session()->get('error') }}
                    </p>
                </div>
                @endif
                <div class="container mx-auto py-3" style="height:60px ; width:420px">
                    <h1 class="text-gray-700 text-xl text-center font-bold">
                        Log In and Do Wonders with W<span class="text-indigo-600 italic">e</span>L<span class="text-indigo-600 italic">e</span>arn
                    </h1>
                </div>
                <div class="bg-white container mx-auto shadow-2xl " style="height: 360px ; width:420px">
                    <el-form class="flex flex-col py-10 px-6" action="/login/student" method="post">
                        @csrf
                        <el-form-item class="mb-3">
                            <input type="text" name="email" id="email"
                                    class="text-xl border border-gray-600 rounded px-4 py-3 w-full outline-none focus:shadow-lg focus:border-blue-400 placeholder-gray-600"
                                    v-model="email" 
                                    placeholder="yourname@yourmail.com" autofocus>
                            @error('email')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </el-form-item>
                        <el-form-item class="mb-3">
                            <input type="password" name="password" id="password"
                                    class="text-xl border border-gray-600 rounded px-4 py-3 w-full outline-none focus:shadow-lg focus:border-blue-400 placeholder-gray-600"
                                    placeholder="Password"
                                    v-model="password">
                            @error('password')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </el-form-item>
                        <el-form-item class="mb-5">
                            <el-button native-type="submit" class="w-full text-xl border border-red-500 bg-red-500 hover:bg-red-600 hover:border-red-600 text-white font-bold px-4 py-3 rounded focus:outline-none">Sign In</el-button>
                        </el-form-item>
                        <el-form-item class="mb-5">
                            <p class="text-center">or <el-link href="{{ url('/forgotpassword') }}" class="text-teal-600 hover:text-teal-700 outline-none">Forgot Password</el-link></p>
                        </el-form-item>
                        <el-form-item class="mb-5">
                            <p class="text-center">Don't have an Account?
                            <el-link href="{{ url('/join/student') }}" class="font-bold text-teal-600 hover:text-teal-700 outline-none">Sign Up Now</el-link>
                            </p>
                        </el-form-item>
                    </el-form>
                </div>
            </div>

            <div class="mb-32"></div>

            @include('layouts.footer')

        </div>
    </body>
</html>