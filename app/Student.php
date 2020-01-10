<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Group;
use app\Lesson;

class Student extends Model
{
    protected $guarded = [];

    public function Group()
    {
        return $this->belongTo(Group::class);
    }
    
    public function Lesson()
    {
        return $this->hasOne(Lesson::class);
    }
}
