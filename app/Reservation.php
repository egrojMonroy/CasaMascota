<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'pet_id',  'date', 'tipo_res'
    ];
}
