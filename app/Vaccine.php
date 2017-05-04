<?php

namespace petstore;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'diseases'
    ];
}
