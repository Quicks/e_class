<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students_class extends Model
{
    protected $table = 'classList';

    public function teacher() {
        return $this->hasOne('app/Teacher');
    }

    public function school()
    {
        return $this->belongsTo('App\Students_class');
    }

}
