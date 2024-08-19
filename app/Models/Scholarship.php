<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'description',
       'scholarship_start_date',
       'scholarship_end_date',
       'status'
            ];

    public function students(){
        return $this->hasMany(Student::class);
    }
}
