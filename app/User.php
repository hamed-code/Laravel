<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    public function post()
    {
        return $this->hasMany('App\Post');
    }

//    public function image()
//    {
//        return $this->morphOne('App\Image', 'imageable');
//    }
//
//    public function address()
//    {
//       return $this->hasOne('App\Address');
//    }
//
//    public function info()
//    {
//       return $this->hasOneThrough('App\Information', 'App\Car');
//    }
//
//    public function getFullNameAttribute()
//    {
//        return $this->first_name . ' ' . $this->last_name;
//    }

}
