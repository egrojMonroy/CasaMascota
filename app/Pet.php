<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model{
    protected $fillable = [
        'name', 'weight', 'height', 'age', 'urlImg', 'gender', 'breed_id'
    ];
}