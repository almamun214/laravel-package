<?php

namespace Mamun\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
       // $this->loadViewsFrom(__DIR__.'/../routes/web.php');

      /*  $this->publishes([
            __DIR__.'/../config/package.php' => config_path('package.php')
        ], 'courier-config');*/

    }

    public function register()
    {
       // $this->app->make('Mamun\Contact\ContactController');
    }

}

