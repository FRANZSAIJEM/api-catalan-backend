<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'salary', 'email', 'dept_id'];

    function departments(){
        return $this->hasMany('App\Models\Department');
    }
}
