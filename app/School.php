<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schoolList';

    public function studentsClass()
    {
        return $this->hasMany('App\Students_class');
    }
    public function teachers()
    {
        return $this->hasMany('App\Teachers');
    }
}
