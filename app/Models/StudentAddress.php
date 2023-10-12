<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    protected $fillable = [
        'student_id',
        'house_number',
        'village_area',
        'tahsil',
        'house_type',
        'district',
        'state',
        'unit_id',
        'pincode',
    ];
    use HasFactory;
    public function students(){
        return $this->belongsTo(Student::class);
    }
}
