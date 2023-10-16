<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable=['name','state_admin_id'];
    use HasFactory;
    public function units(){
        return $this->hasMany(UnitAdmin::class,'unit_admin_id');
    }
    public function state(){
        return $this->belongsTo(StateAdmin::class,'state_admin_id');
    }
}
