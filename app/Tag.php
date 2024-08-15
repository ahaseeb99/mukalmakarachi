<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $table = 'tags';

    //
    protected $fillable = [
	  	'title','slug','thumbnail','type','excerpt'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

	
}