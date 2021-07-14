<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $fillable=[
        'user_id',
        'course_title',
        'course_subtitle',
        'course_description',
        'course_language',
        'course_difficulty',
        'course_category',
        'course_summary',
        'course_prerequisites',
        'course_learners',
        'course_image',
        'course_video'
    ];

    public function course()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function CreatedUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function enrolls()
    {
        return $this->belongsToMany(Course::class,'follows','course_id','user_id')->withTimestamps();
    }

    
    
}
