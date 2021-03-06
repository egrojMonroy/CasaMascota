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
        'user_id', 'pet_id',  'date', 'tipo_res', 'createdBy', 'updatedBy'
    ];

    protected $dates = ['deleted_at'];

    public function user(){


            return$this->belongsTo('User');

    }
    public function pet(){


        return$this->belongsTo('pet');

    }


}
