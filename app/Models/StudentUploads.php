<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUploads extends Model
{
    protected $fillable = [
        "image_file_path",
        "fees_file_path",
        "adhaar_file_path",
        "marks_file_path",
        "passbook_file_path",
    ];
    use HasFactory;
    public function students(){
        return $this->belongsTo(Student::class);
    }
}
