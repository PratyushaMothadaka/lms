{{-- This is signup page for students --}}
<!DOCTYPE html>
<html>
    <head>
        <title>Teach on WeLearn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- importing the css file for tailwindcss --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- importing the js file for element-ui --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body class="font-serif bg-gray-100">
        <div id="app" class="overflow-hidden">

            @include('layouts.teach_navbar')

            <div class="flex flex-col items-center justify-center mx-auto pt-24">
                <div class="container mx-auto py-3" style="height:60px ; width:420px">
                    <h1 class="text-gray-700 text-xl text-center font-bold">
                        Become an Instructor on W<span class="text-indigo-600 italic">e</span>L<span class="text-indigo-600 italic">e</span>arn
                    </h1>
                </div>
                <div class="bg-white container mx-auto shadow-lg" style="height: 440px ; width:420px">
                    <el-form class="flex flex-col py-10 px-6" action="{{ route('teacher.register') }}" method="post">
                        @csrf
                        <el-form-item class="mb-3">
                            <input type="text" name="name" id="name"
                                    class="text-xl border border-gray-600 rounded px-4 py-3 w-full outline-none focus:shadow-lg focus:border-blue-400 placeholder-gray-600"
                                    v-model="name" 
                                    placeholder="Full Name" autofocus>
                            @error('name')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </el-form-item>
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
                            <el-button native-type="submit" class="w-full text-xl border border-red-500 bg-red-500 hover:bg-red-600 hover:border-red-600 text-white font-bold px-4 py-3 rounded focus:outline-none">Sign Up</el-button>
                        </el-form-item>
                        <el-form-item class="mb-5">
                            <p class="text-center">Already have an Account?
                                <el-link href="{{ url('/login/instructor') }}" class="font-bold text-teal-600 hover:text-teal-700 outline-none">Sign In Now</el-link>
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