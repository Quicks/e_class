<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{
    public $timestamps = false;
    protected $table = 'classLists';
    protected $fillable = ['class_name', 'number', 'school_id'];

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function daily() {
        return $this->hasMany('App\Daily', 'class_id');
    }

    public function user() {
        return $this->hasMany('App\User');
    }
}
