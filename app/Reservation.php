<?php

namespace petstore;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'user_id', 'pet_id',  'date', 'tipo_res'
    ];

    protected $dates = ['deleted_at'];


}
