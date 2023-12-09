<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Verify extends Model
{
    use HasFactory;
    protected $fillable=['student_id',
    'user_id',
    'comment',
    'status',];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function students():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
