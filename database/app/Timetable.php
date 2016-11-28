<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = 'timetables';
    public $fillable = ['day', 'number'];
    public $timestamps = false;

    public function students_class()
    {
        return $this->belongsToMany('App\Students_class', 'teachers_to_class', 'id_teachers', 'id_classes');
    }
}