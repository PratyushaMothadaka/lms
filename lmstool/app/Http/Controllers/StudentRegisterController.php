<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class StudentRegisterController extends Controller
{
    public function show()
    {
        return view('student.register');
    }

    public function register(Request $request)
    {
        $this -> validation($request);
        $request['password']=bcrypt($request->password);
        User::create($request->all());
        return redirect('/login/student')->with('message','Registration Successful. Please Login');
        //return $request->all();
    }

    public function validation($request)
    {
        return $this->validate($request,[
            'name' => 'required | max:100 | min:8',
            'email' => 'required | email | unique:users| max:100',
            'password' => 'required | min:8 | max:200'
        ]);
    }
}
