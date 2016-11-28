<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_register extends Model
{
    public $timestamps = false;
    protected $table = 'class_registers';
    protected $fillable = ['student_id', 'mark'];
    public function value()
    {
        return $this->hasMany('App\Value');
    }
}
