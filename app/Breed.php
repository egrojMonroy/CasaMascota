<?php

namespace petstore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Breed extends Model{

	use SoftDeletes;
    protected $fillable = [
        'name', 'family_id'
    ];

    public $sortable = ['id',
	                    'name',
	                    'family_id',
	                    'created_at',
	                    'updated_at',
	                    'createdBy',
	                    'updatedBy',
	                    'deleted_at',
	                    'deletedBy'];



    protected $dates = ['deleted_at'];
}
