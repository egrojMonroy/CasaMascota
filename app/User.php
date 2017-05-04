<?php

namespace petstore;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
