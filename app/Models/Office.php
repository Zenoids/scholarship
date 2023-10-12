<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'state_id',
        'unit_id',
        'student_id',
    ];
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
}
