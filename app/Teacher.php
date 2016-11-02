<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'Teachers';
    public $fillable = ['class_name','name', 'email'];
    public $timestamps = false;
    public function students_class() {

        return $this->belongsToMany('App\Students_class', 'teachers_to_class', 'id_teachers', 'id_classes');

    }
}

