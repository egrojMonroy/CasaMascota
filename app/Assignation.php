<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignation extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id','room_id', 'createdBy', 'updatedBy'
    ];

    protected $dates = ['deleted_at'];
}
