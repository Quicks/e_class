<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    public $timestamps = false;
    protected $table = 'values';
    protected $fillable = ['value', 'date'];
    public function class_register()
    {
        return $this->belongsTo('App\Class_register');
    }
}
