<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;

class Family extends Model{
    protected $fillable = [
        'name',
    ];
}