<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    public $timestamps = false;
    protected $table = 'dailies';
    protected $fillable = ['subject', 'class_id'];

    public function classList()
    {
        return $this->belongsTo('App\ClassList', 'class_id');
    }
    public function value() {

        return $this->hasMany('App\Value');
    }
    public function subject() {

        return $this->belongsTo('App\Subject');
    }
    public function user() {

        return $this->hasManyThrough(User::class, ClassList::class);
    }

}
