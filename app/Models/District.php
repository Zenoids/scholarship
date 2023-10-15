<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable=['name','state_admin_id'];
    use HasFactory;
    public function units(){
        return $this->hasMany(UnitAdmin::class);
    }
    public function state(){
        return $this->belongsTo(StateAdmin::class,'state_admin_id');
    }
}
