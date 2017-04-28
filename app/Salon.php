<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model{
    protected $fillable = [
        'date', 'observation', 'user_id', 'pet_id', 'type_id'];
}