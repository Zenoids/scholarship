<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[

        'comment',
        'student_id',
        'user_id',
        'role',
        'action',
        'approval_id',
        'approval_amount_id',
        'office_id',

    ];
    public function student(){
            return $this->belongsTo(Student::class);
    }
    public function user(){
            return $this->belongsTo(User::class);
    }
    public function office(){
            return $this->belongsTo(Office::class);
    }
    public function approval(){
            return $this->belongsTo(Approval::class);
    }
}
