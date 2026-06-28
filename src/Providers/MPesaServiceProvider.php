<?php

namespace Nakatsinho\MpesaLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Nakatsinho\MpesaLaravel\Commands\PublishSDK;

class MPesaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishSDK::class,
            ]);
        }
    }
}
