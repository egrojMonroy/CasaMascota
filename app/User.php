<?php

namespace petstore;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
        use Notifiable;
        use SoftDeletes;
    protected $fillable = [
        'name','last_name', 'email', 'password','rol_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['deleted_at'];


    public function reservations(){



        return $this->hasMany('Reservation');
    }
    public function roles()
    {
        return $this->belongsToMany('Role','user_roles');
    }
}
