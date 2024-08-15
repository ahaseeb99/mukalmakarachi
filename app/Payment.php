<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Payment extends Model

{
    
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'date',
    ];
    
    
     public function order()
    {
        return $this->belongsTo('App\Order');
    }
    
}