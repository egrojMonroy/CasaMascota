<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model{
    protected $fillable = [
        'name', 'family_id'
    ];
}
