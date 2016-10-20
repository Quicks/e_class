<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students_class extends Model
{
    protected $table = 'classList';

    public function teacher() {

        return $this->belongsToMany('App\Teacher', 'teachers_to_class', 'id_classes', 'id_teachers');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }

}
