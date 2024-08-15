<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function category()
    {
        return $this->belongsTo('App\VideoCategory','category_id');
    }

  
}