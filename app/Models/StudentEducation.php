<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEducation extends Model
{
    protected $fillable = [
        'student_id',
        'course_id',
        'course_year',
        'branch_name',
        'course_period',
        'rank_entrance',
        'institute_name',
        'institute_locality',
        'institute_district',
        'institute_state',
    ];
    use HasFactory;
    public function students(){
        return $this->belongsTo(Student::class);
    }
    public function courses(){
        return $this->hasOne(Course::class);
    }
}
