<?php

namespace petstore;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diseases extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];
    //protected $dates = ['deleted_at'];
}
