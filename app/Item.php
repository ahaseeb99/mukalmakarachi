<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Item;

class Item extends Model
{
    
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
        "date"
    ];


    public function category()
    {
       return $this->belongsTo('App\Category','category_id');
    }

    public function author()
    {
       return $this->belongsTo('App\Author','author_id');
    }
      
    
    
}