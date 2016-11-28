<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    public function class_registers() {
        return $this->belongsToMany('App\Class_register');
    }
}
