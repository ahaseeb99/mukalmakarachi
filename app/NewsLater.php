<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class NewsLater extends Model
{
    //
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

  
 protected $table = 'newslaters';
    

    

}