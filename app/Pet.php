<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model{

	use SoftDeletes;
    protected $fillable = [
        'name', 'weight', 'height', 'age', 'urlImg', 'gender', 'breed_id', 'createdBy', 'updatedBy'
    ];

    protected $dates = ['deleted_at'];

    public function reservations(){

        return $this->hasMany('Reservation');
    }
}