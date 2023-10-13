<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'student_id',
        'state_admin_id',
        'unit_admin_id',
    ];
    use HasFactory;
    public function students(){
        return $this->belongsTo(Student::class);
    }
}
