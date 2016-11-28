<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schoolList';
    public $timestamps = false;
    protected $fillable = ['name', 'number'];
    public function classList()
    {
        return $this->hasMany('App\ClassList');
    }
}
