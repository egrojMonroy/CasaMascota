<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class vac_di extends Model
{

    protected $fillable = [
        'vac_id','dis_id'
    ];

}
