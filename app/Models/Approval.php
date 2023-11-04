<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $fillable = [

        'approval_status',
        'approval_comment',
        'student_id',
        'user_id',
        'amount',
        'role',
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
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function markaz(){
        return $this->belongsTo(User::class)->where('role', 'MarkazAdmin');
    }
}
