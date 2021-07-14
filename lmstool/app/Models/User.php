<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Course;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function follow($courseId)
    {
        $course = Course::find($courseId);
        if(! $course) {
            return 'failed'; 
        }
        $course->enrolls()->attach(auth()->user()->id);
        return redirect()->back()->with('message','You enrolled for the course successfully!');
    }
   
    public function follows()
    {
        return $this->belongsToMany(Course::class,'follows','user_id','course_id');
    }

    public function following(Course $course)
    {
        return $this->follows->contains($course);
        // return $this->follows()->where('course_id',Auth::user()->id)->exists();
    }

}
