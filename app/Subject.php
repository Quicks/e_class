<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;
    protected $table = 'subjects';
    protected $fillable = ['title', 'description'];

    public function daily() {
        return $this->hasMany('App\Daily');
    }
}
