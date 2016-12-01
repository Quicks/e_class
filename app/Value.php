<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    public $timestamps = false;
    protected $table = 'values';
    protected $fillable = ['value', 'date', 'id_student', 'daily_id'];

    public function class_register()
    {
        return $this->belongsTo('App\Daily', 'daily_id');
    }
}
