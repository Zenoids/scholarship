<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenewedUpload extends Model
{
    use HasFactory;
    protected $table = 'renewed_upload';
    protected $fillable = [
        "renewfeesfile",
        "renewmarksfile",
        "studentId",
    ];
    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
