<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User_role extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id','role_id'
    ];
    protected $dates = ['deleted_at'];
}
