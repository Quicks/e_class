<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'Teachers';

    public function students_class() {

        return $this->belongsTo('app/Students_class');

    }
}
