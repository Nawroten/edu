<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Student;

class Group extends Model
{
    protected $guarded = [];

    public function Student()
    {
        return $this->hasMany(Student::class);
    }
}
