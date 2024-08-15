<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Item;

class Tweet extends Model
{

    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
        'date'
    ];


    public function author()
    {
        return $this->belongsTo('App\Author');
    }

 


}