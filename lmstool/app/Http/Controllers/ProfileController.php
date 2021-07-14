<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        // return $user;
        return view('profile',compact('user'));
    }
    public function edit(User $user)
    {
        // return $user;
        return view('editprofile',compact('user'));
    }
    public function update(User $user,Request $request)
    {
        $user=User::find(Auth::user()->id);
        if($user)
        {
            $validate = $request->validate([
                'avatar' => 'file',
                'designation' => 'max:100',
                'tagline' => 'max:100',
                'bio' => 'max:500',
                'skills' => 'max:100',

            ]);
            $user->avatar=$request['avatar']->store('avatars');
            $user->designation=$request['designation'];
            $user->tagline=$request['tagline'];
            $user->bio=$request['bio'];
            $user->skills=$request['skills'];

            $user->save();
            return redirect()->back()->with('message','Updated your profile successfully!');
        }
    }
}
