<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

 
 
      public function module()
    {
        return $this->belongsTo('App\Module');
    }

   
}