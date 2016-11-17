<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_register extends Model
{
    public $timestamps = false;
    public function teacher() {

        return $this->belongsTo('App\Teacher');
    }
    public function students() {
        return $this->belongsToMany('App\Student');
    }
}
