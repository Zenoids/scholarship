<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];
    use HasFactory;
    public function studenteducation(){
        return $this->hasOne(StudentEducation::class);
    }
}
