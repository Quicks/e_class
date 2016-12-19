<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function value() {

        return $this->hasMany('App\Value',  'id_student');
    }
    public function classList() {

        return $this->belongsTo('App\ClassList', 'class_id');
    }
    public function daily() {

        return $this->belongsTo('App\Daily');
    }
    public function getValueByDate($daily, $date) {
        $res = '';
        $value = $this->value()->where('daily_id', $daily->id)->where('date', $date)->first();
        if($value){
            $res = $value->value;
        }
        return $res;
//            $this->value()->where('date', $date->format('Y-m-d'))->get();
//        $comments = App\Post::find(1)->comments()->where('title', 'foo')->first();
//        self->$this->value()
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
    {
        return $this->belongsToMany('App\Role','user_roles');
    }
    public function hasAnyRole($roles) {
        if(is_array($roles)) {
            foreach ($roles as $role) {
                if($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    public function hasRole($role) {
        if($this->roles()->where('title', $role)->first()) {
            return true;
        } else {
            return false;
        };
    }
}
