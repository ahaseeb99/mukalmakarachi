<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\View;
use Con;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    
      //
        $this->app->bind('Config',function(){
            return new \App\Utils\Config();
        });
        
        
        $this->app->bind('Perm',function(){

            return new \App\Utils\PermissionManage();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('*',function(View $view){
            
            $_settings = Con::settings();
            $view->with('_settings',$_settings);
        });
        
    }
}
