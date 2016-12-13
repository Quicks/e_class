<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    public $timestamps = false;
    protected $table = 'values';
    protected $fillable = ['value', 'date', 'id_student', 'daily_id'];

    public function daily()
    {
        return $this->belongsTo('App\Daily', 'daily_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
