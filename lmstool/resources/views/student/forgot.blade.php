{{-- This is forgot password page--}}
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password | WeLearn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- importing the css file for tailwindcss --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- importing the js file for element-ui --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body class="font-serif bg-gray-100">
        <div id="app" class="flex flex-col items-center justify-center mx-auto py-32 overflow-hidden">
            <div class="container mx-auto py-3" style="height:60px ; width:420px">
                <h1 class="text-gray-700 text-xl text-center font-bold">
                    Forgot your Password ?
                </h1>
            </div>

            <div class="bg-white border-t-4 border-red-500 container mx-auto shadow-2xl rounded" style="height: 280px ; width:420px">
                <el-form class="flex flex-col py-10 px-6">
                    <el-form-item class="mb-3">
                        <el-input type="text" class="border border-gray-300 px-4 py-4"
                                v-model="email" 
                                placeholder="myname@example.com"></el-input>
                    </el-form-item>
                    <el-form-item class="mb-5">
                        <el-button icon="el-icon-search" class="w-full text-xl border border-red-500 bg-red-500 hover:bg-red-600 hover:border-red-600 text-white font-bold px-4 py-3 rounded focus:outline-none">Reset Password</el-button>
                    </el-form-item>
                    <el-form-item class="mb-3">
                        <p class="text-center">Or 
                            <el-link href="{{ url('/login/student') }}" class="font-bold text-teal-600 hover:text-teal-700 outline-none">Log In</el-link>
                        </p>
                    </el-form-item>
                    <el-form-item class="mb-5">
                        <p class="text-center">Don't have an Account?
                            <el-link href="{{ url('/join/student') }}" class="font-bold text-teal-600 hover:text-teal-700 outline-none">Sign Up Now</el-link>
                        </p>
                    </el-form-item>
                </el-form>
            </div>
        </div>
<!-- import Vue before Element -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <!-- import JavaScript -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
        <script>
            new Vue({
                el:'#app',
                data:{
                    email:''
                    }
                });
        </script>
    </body>
</html>