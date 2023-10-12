<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateAdmin extends Model
{
    protected $fillable = [
        'user_id',
        'name',
            ];
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
}
