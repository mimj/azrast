<?php

namespace Mimj\AzRast;

use Illuminate\Support\ServiceProvider;

class RtlParsdownProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('rtl_it', function () {
            return new RtlIt();
        });
    }
}
