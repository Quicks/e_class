<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{
    public $timestamps = false;
    protected $table = 'classLists';
    protected $fillable = ['class_name', 'number', 'school'];
    public function school()
    {
        return $this->belongsTo('App\School');
    }
}