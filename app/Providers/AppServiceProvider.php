<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
     if ($this->app->environment() == 'production') {
     URL::forceSchema('https');
     }
    public function register()
    {
      // Force SSL in production

      // if (env('APP_ENV') === 'production') {
      //   $this->app['request']->server->set('HTTPS', true);
      // }
    }

}
