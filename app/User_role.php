<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User_role extends Model
{

    protected $fillable = [
        'user_id','role_id'
    ];

}
