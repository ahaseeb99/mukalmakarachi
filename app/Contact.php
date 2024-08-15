<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Contact;

class Contact extends Model
{

    protected $guarded = [];
    protected $dates = [
        'created_at',
        'updated_at',
    ];



}