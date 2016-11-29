<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    public $timestamps = false;
    protected $table = 'dailies';
    protected $fillable = ['id', 'subject'];

    public function classList()
    {
        return $this->belongsTo('App\ClassList');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    public function classes() {

        return $this->hasManyThrough('App\ClassList', 'App\User');
    }
}
