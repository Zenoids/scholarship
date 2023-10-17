<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'fathers_name',
        'first_name',
        'last_name',
        'd_o_b',
        'gender',
        'religion',
        'mobile',
        'adhaar',
        'orphan_disability',
            ];
    use HasFactory;
    public function units(){
        return $this->belongsTo(UnitAdmin::class);
    }
    public function states(){
        return $this->belongsTo(StateAdmin::class);
    }
    public function addresses(){
        return $this->hasOne(StudentAddress::class);
    }
    public function incomes(){
        return $this->hasOne(StudentIncome::class);
    }
    public function educations(){
        return $this->hasOne(StudentEducation::class);
    }
    public function previous(){
        return $this->hasOne(StudentPreviousEducation::class);
    }
    public function uploads(){
        return $this->hasOne(StudentUploads::class);
    }
    public function approvals(){
        return $this->hasOne(Approval::class);
    }
    public function amounts(){
        return $this->hasOne(ApprovalAmount::class);
    }
    // public function course(){
    //     return $this->hasOne(Course::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function offices(){
        return $this->hasOne(Office::class);
    }
    //
}
