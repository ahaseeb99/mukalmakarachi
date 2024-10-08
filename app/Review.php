<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Review extends Model

{
    
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
     public function item()
    {
        return $this->belongsTo('App\Blog','blog_id');
    }

  
}