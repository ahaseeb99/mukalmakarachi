<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
  protected $guarded = [];
  protected $dates = ['created_at','updated_at','date'];
  
  
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
    public function orderitems()
    {
        return $this->hasMany('App\OrderItem','order_id');
    }
 
}