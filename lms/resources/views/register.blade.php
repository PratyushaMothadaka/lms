<!DOCTYPE html>
<html>
<head>
<title>Register Here</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
</head>
<body>
<div class="container-fluid" id="root">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-lg-3"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4 text-center">Register here!</h3>
               <form action="{{ url('register') }}" method="POST" id="regForm">
                 {{ csrf_field() }}
                <div class="form-label-group mb-1">
                    <label for="inputName">Name</label>
                    <el-input placeholder="John David" name="name" autofocus v-model="name"></el-input>
                    {{-- <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus> --}}
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror      
 
                </div> 
                <div class="form-label-group mb-1">
                    <label for="inputEmail">Email address</label>
                    <el-input placeholder="abc@example.com" name="email" autofocus v-model="email"></el-input>
                    {{-- <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" > --}}
                  @error('email')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror  
                </div> 
 
                <div class="form-label-group mb-2">
                    <label for="inputPassword">Password</label>
                    <el-input placeholder="Password" name="password" v-model="password" show-password></el-input>
                    {{-- <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"> --}}
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <el-button class="btn btn-lg btn-dark btn-block btn-login text-uppercase font-weight-bold mb-2" type="danger" v-on:click="onSubmit">Login</el-button> --}}
                <button class="btn btn-lg btn-success btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" v-on:click="onSubmit">Sign Up</button>
                <div class="text-center">Already a User?
                  <a class="small" href="{{url('login')}}">Sign In</a>
                </div>
                <script src="/js/app.js"></script>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>