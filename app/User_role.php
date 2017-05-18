<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User_role extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];
    protected $dates = ['deleted_at'];
}
