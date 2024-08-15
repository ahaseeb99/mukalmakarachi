<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Author extends Model
{
    
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    
}