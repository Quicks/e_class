<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $fillable = ['class_name','name', 'email'];
    public $timestamps = false;

    public function classList() {

        return $this->belongsTo('App\ClassList');
    }

}

