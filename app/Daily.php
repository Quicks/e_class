<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    public $timestamps = false;
    protected $table = 'daily';
    protected $fillable = ['id', 'subject'];
    public function value()
    {
        return $this->hasMany('App\Value');
    }
}
