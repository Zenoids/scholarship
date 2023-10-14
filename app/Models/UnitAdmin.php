<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitAdmin extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'district_id'
            ];
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function districts(){
        return $this->belongsTo(District::class);
    }
}
