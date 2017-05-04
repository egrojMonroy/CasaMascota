<?php

namespace petstore;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vaccine extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'name', 'diseases'
    ];
    protected $dates = ['deleted_at'];
}
