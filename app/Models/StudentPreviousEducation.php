<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPreviousEducation extends Model
{
    protected $fillable = [
        'student_id',
        'previous_course_name',
        'previous_course_subjects',
        'previous_hallticket',
        'previous_course_institution',
        'previous_course_marks',
        'tenth_subjects',
        'tenth_hallticket',
        'tenth_institution',
        'tenth_marks',
        'inter_subjects',
        'inter_hallticket',
        'inter_institution',
        'inter_marks',
          ];
    use HasFactory;
    public function students(){
        return $this->belongsTo(Student::class);
    }
}
