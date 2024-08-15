<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
         
         $this->registerPolicies();
         $p = Permission::all();   
         
         foreach ($p as $permission) {
        
         Gate::define($permission->name,function($user) use ($permission){
             
            if($user->role->name != 'super-admin'){

                    $p = unserialize($user->permissions);
                    if(is_array($p)){
                        $p = [];
                    }
                  
                    if(in_array($permission->name,$p)){
                                
                        return true;
                                
                    }else{
                        return false;
                    }
                 
             }
             return true;
         });
       }
       
       
   }
}