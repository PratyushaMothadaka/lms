<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Str;

class TeacherLoginController extends Controller
{
    public function show()
    {
        return view('teacher.teachlogin');
    }
    public function login(Request $request)
    {
        // $this->validate($request,[
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        // $credentials=$request->only('email','password');
        // if(Auth::attempt($credentials))
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            // return 'successful login as a teacher';
            // return redirect('/teacher/welcome');
            return redirect('/teaching');
        }
        else
        {
            return redirect('/login/instructor')->with('error','Email or password is incorrect. Please try again.');
        }
    }
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/teaching');
    }
}
