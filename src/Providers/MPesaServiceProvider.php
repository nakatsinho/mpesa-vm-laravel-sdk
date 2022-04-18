<?php

namespace Nakatsinho\MpesaLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Nakatsinho\MpesaLaravel\Commands\PublishSDK;

class MPesaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('mpesa-sdk:publish', function ($app){
            return new PublishSDK();
        });

        $this->commands([
            'mpesa-sdk:publish',
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
