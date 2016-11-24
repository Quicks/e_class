<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $fillable = ['class_name','name', 'email'];
    public $timestamps = false;

    public function class_registers() {
        return $this->hasMany('App\Class_register');
    }

}

