<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use app\Student;

class Lesson extends Model
{
    protected $guarded = [];
    public function Student()
    {
        return $this->BelongTo(Student::class);
    }
}
