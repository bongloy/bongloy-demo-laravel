<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
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
      Bongloy::$apiBase = Config('bongloy.api_base');
      Bongloy::$apiKey = Config('bongloy.api_key');
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
