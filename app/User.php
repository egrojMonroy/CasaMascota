<?php

namespace petstore;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
        use Notifiable;

    protected $fillable = [
        'name','last_name', 'email', 'password','rol_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
