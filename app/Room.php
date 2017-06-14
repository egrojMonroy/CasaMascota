<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name','type_id','number', 'createdBy', 'updatedBy'
    ];
    protected $casts = [
        'number' => 'integer'
    ];
    protected $dates = ['deleted_at'];

}
