<?php

namespace UIXBase\UIXBaseLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ComponentsServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/avatars', 'avatars');

        /* Elements */ 
        Blade::component('avatars::default', 'avatar');
        Blade::component('avatars::group', 'group:avatar');
        
    }

}
