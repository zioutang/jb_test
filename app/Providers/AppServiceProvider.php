<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
      // Force SSL in production
       if ($this->app->environment() == 'production') {
          URL::forceSchema('https');
       }
      // if (env('APP_ENV') === 'production') {
      //   $this->app['request']->server->set('HTTPS', true);
      // }
    }

}
