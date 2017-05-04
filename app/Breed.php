<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model{

	use SoftDeletes;
    protected $fillable = [
        'name', 'family_id'
    ];

    protected $dates = ['deleted_at'];
}
