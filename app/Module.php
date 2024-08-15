<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Module extends Model
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

   
    public function post()
    {
        return $this->hasMany('App\Post',"module_id");
    }
    
}