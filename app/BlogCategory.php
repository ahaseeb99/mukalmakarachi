<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class BlogCategory extends Model
{

    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

  
}