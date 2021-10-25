<?php

namespace Invoidea\SimpleContact;

use Illuminate\Support\ServiceProvider;

class SimpleContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'simpleform');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->registerRoutes();
    }   
    
    public function register()
    {

    }


    // protected function registerRoutes()
    // {
    //     Route::group($this->routeConfiguration(), function () {
    //         $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    //     });
    // }

    // protected function routeConfiguration()
    // {
    //     return [
    //         'prefix' => config('blogpackage.prefix'),
    //         'middleware' => config('blogpackage.middleware'),
    //     ];
    // }

}
