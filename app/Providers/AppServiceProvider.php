<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Interfaces\ClientInterface', 'App\Repositories\ClientRepository');
	    //$this->app->bind('App\Interfaces\CommandeInterface', 'App\Repositories\CommandeRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       	Schema::defaultStringLength(191);
    }
}
