<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Group;

class Student extends Model
{
    protected $guarded = [];

    public function Group()
    {
        return $this->belongTo(Group::class);
    }
}
