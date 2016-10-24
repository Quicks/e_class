<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'Teachers';

    public function students_class() {

        return $this->belongsToMany('App\Students_class', 'teachers_to_class', 'id_teachers', 'id_classes');

    }
}

