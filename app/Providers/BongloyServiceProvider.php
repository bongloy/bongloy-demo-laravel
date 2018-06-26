<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Stripe\Stripe As Bongloy;
use Config;

class BongloyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      Bongloy::$apiBase = Config::get('bongloy.api_base');
      Bongloy::$apiKey = Config::get('bongloy.api_key');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
