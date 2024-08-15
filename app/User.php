<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Review;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "company","name","email","password","fname","lname","role_id","status","gender","social","mobile","country","state","city","zip","address","bio","story","image","cover","birthday","nic","api_token","created_at","updated_at"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
      protected $dates = [
        'created_at',
        'updated_at',
        'birthday'
    ];


    // Relation
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function profile()
    {
       return $this->hasOne(Profile::class);
    }
    
     public function post()
    {
        return $this->hasMany('App\Post');
    }
    
    public function Review()
    {
        return $this->belongsTo('App\Review');
    }
    
  
     public function supplier()
    {
        return $this->hasOne('App\Supplier','user_id');
    }
    
    public function message()
    {
        return $this->hasMany('App\Message','sender_id')->orderBy('created_at','DESC');
    }



}
