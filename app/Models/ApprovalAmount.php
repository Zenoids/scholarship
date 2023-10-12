<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalAmount extends Model
{
    protected $fillable = [
        'comment',
        'amount',
        'student_id',
        'user_id',
    ];
    use HasFactory;
    public function students(){
        return $this->belongsTo(Student::class);
    }
       public function states(){
        return $this->belongsTo(StateAdmin::class);
    }
    public function units(){
        return $this->belongsTo(UnitAdmin::class);
    }
    public function markaz(){
        return $this->belongsTo(User::class)->where('role', 'MarkazAdmin');
    }
}
