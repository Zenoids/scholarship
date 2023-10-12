<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentIncome extends Model
{
    protected $fillable = [
        'student_id',
        'name_ac_holder',
        'ac_branch',
        'bank_name',
        'ac_number',
        'ifsc',
        'fathers_occupation',
        'fathers_monthly_income',
        'expense_bearer',
        'expense_bearer_monthly_income',
          ];
    use HasFactory;
    public function students(){
        return $this->belongsTo(Student::class);
    }
}
